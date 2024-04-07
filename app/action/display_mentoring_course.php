<?php
session_start();
include("../../config.php");

function displayCourseMentoring($conn, $userId) {
    $courses = array();

    $sql = "SELECT Course.courseId, Course.courseName, Course.courseLevel 
            FROM Course
            INNER JOIN MentorshipCourseRegistration ON Course.courseId = MentorshipCourseRegistration.CourseId
            WHERE MentorshipCourseRegistration.mentorId = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $courses[] = $row;
        }
    }

    return $courses;
}

if (isset($_SESSION['userId'])) {
    $userId = $_SESSION['userId'];
    $courseData = displayCourseMentoring($conn, $userId);
    echo json_encode($courseData);
} else {
    echo json_encode(array("error" => "User not logged in"));
}

$conn->close();
?>
