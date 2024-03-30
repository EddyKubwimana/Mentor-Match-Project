<?php
include("../../config.php");
$sql = "SELECT DISTINCT course_name FROM courses";
$result = $conn->query($sql);

$courses = array();


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $courses[] = $row['course_name'];
    }
}

$conn->close();

echo json_encode($courses);
?>
