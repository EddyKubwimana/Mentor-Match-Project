<?php
session_start();
include("../../config.php");

$matchingId = $_POST['matchingId'];


$query  = "UPDATE Matching SET status = 'Accepted'  where matchingId = $matchingId";
if($conn->query($query)){

            echo json_encode(array("status" => "success", "message" => "You have successful added the mentee ".$_SESSION["firstName"].""));



        }
 else{
        
            echo json_encode(array("status" => "error", "message" => "try again, an error happened ".$_SESSION["firstName"].""));

        }

?>
