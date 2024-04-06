<?php
session_start();
include("../../config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $courseId = $_POST['courseId'];
    $mentorId = $_SESSION['userId'];

    $sql = "DELETE From MentorshipCourseRegistration WHERE courseId = $courseId AND mentorId = $mentorId";


                
    if ($conn->query($sql) === TRUE) {
                    echo json_encode(array("status" => "success", "message" => "You  have successfully remove the course  ".$_SESSION["firstName"].""));
    } else {
                    echo json_encode(array("status" => "error", "message" => "Failed to remove the course, try again ".$_SESSION["firstName"].""));
     }

    $conn->close();

}

?>
