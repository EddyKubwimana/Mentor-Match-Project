<?php
session_start();
include("../../config.php");
$userId = $_SESSION['userId'];

$sql = "DELETE FROM Mentee  WHERE userId = $userId";

if($conn->query($sql)){

    echo json_encode(array("status" => "success", "message" => "You are no longer a  Mentee ".$_SESSION["Firstname"].""));

}

else{

    echo json_encode(array("status" => "error", "message" => "Your request failed ".$_SESSION["Firstname"].""));



}


?>