<?php
include("../../config.php");

$sql = "SELECT * FROM Course"; 
$result = $conn->query($sql);

$courses = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $courses[] = array(
            'id' => $row['courseId'],
            'name' => $row['courseName'],
            'level'=>$row['courseLevel']
        );
    }
}

$conn->close();

echo json_encode($courses);
?>
