<?php
session_start();
include("../../config.php");

$userId = $_SESSION['userId'];
$mentorId = $_POST['mentorId'];

$checker = "SELECT* FROM Matching where mentorId = $mentorId AND menteeId = $userId";

$res = $conn->query($checker);

if ($res->num_rows==0){

        $query  = "INSERT INTO Matching(mentorId, menteeId, status) VALUE ($mentorId,$userId, 'Pending')";
        if($conn->query($query)){

            echo json_encode(array("status" => "success", "message" => "You request has been sent ".$_SESSION["firstName"].""));



        }

        else{
        
            echo json_encode(array("status" => "error", "message" => "try again, an error happened ".$_SESSION["firstName"].""));

        }

    }


else{

    echo json_encode(array("status" => "error", "message" => "You alread have this person as your Mentor".$_SESSION["firstName"].""));


}

?>
