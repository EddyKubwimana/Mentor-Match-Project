<?php


$sql = "SELECT courseId, courseName FROM Course";
$result = $conn->query($sql);


$courses = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $courses[] = $row;
    }
}


$conn->close();


echo json_encode($courses);
?>
