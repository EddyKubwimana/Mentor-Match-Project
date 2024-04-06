<?php
session_start();
include("../../config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $courseId = $_POST['courseId'];
    $menteeId = $_SESSION['userId'];

    $check = "SELECT * From MenteeCourseRegistration WHERE courseId =$courseId";

    $verifier =$conn->query($check);

    if($verifier->num_rows==0){

                $sql = "INSERT INTO MenteeCourseRegistration (menteeId, courseId) VALUES ('$menteeId','$courseId')";
                if ($conn->query($sql) === TRUE) {
                    echo json_encode(array("status" => "success", "message" => "You  have successfully added the course  ".$_SESSION["firstName"].""));
                } else {
                    echo json_encode(array("status" => "error", "message" => "Failed to add the course, try again ".$_SESSION["firstName"].""));
                }

                $conn->close();

}

else{


    echo json_encode(array("status" => "Error ", "message" => "You already had this course on your list  ".$_SESSION["firstName"].""));


}

}
?>
