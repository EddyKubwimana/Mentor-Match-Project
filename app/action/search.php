<?php
session_start();
include("../../config.php");

$userId = $_SESSION['userId']; 
$keyword = '%' . $_GET["query"] . '%'; 
$sql = "SELECT DISTINCT
    U.userId,
    U.firstName,
    U.lastName,
    U.email,
    C.courseName,
    CASE
        WHEN Mentor.userId IS NOT NULL THEN 'Mentor'
        WHEN Mentee.userId IS NOT NULL THEN 'Mentee'
    END AS role
FROM
    User U
JOIN
    MentorshipCourseRegistration MCR ON U.userId = MCR.mentorId
JOIN
    Course C ON MCR.courseId = C.courseId
LEFT JOIN
    Mentor ON U.userId = Mentor.userId
LEFT JOIN
    Mentee ON U.userId = Mentee.userId
WHERE
    (
        MCR.courseId IN (
            SELECT courseId FROM MentorshipCourseRegistration WHERE mentorId = $userId
            UNION
            SELECT courseId FROM MenteeCourseRegistration WHERE menteeId = $userId
        )
        OR
        Mentor.userId IN (
            SELECT mentorId FROM MentorshipCourseRegistration WHERE courseId IN (
                SELECT courseId FROM MentorshipCourseRegistration WHERE mentorId = $userId
                UNION
                SELECT courseId FROM MenteeCourseRegistration WHERE menteeId = $userId
            )
        )
        OR
        Mentee.userId IN (
            SELECT menteeId FROM MenteeCourseRegistration WHERE courseId IN (
                SELECT courseId FROM MentorshipCourseRegistration WHERE mentorId = $userId
                UNION
                SELECT courseId FROM MenteeCourseRegistration WHERE menteeId = $userId
            )
        )

        OR U.firstName LIKE ?
        OR U.lastName LIKE ?
        OR C.courseName LIKE ?
    )

    AND U.userId != $userId";

$stmt = $conn->prepare($sql);

if (!$stmt) {
    echo "Error in prepared statement: " . $conn->error;
    exit();
}


$stmt->bind_param("sss", $keyword, $keyword, $keyword);


$stmt->execute();


$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $mentors = array();
    while ($row = $result->fetch_assoc()) {
        $mentors[] = $row;
    }
    echo json_encode($mentors);
} else {
    echo json_encode(array());
}

$stmt->close();
$conn->close();

?>
