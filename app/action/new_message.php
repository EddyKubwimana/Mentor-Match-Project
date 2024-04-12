<?php
session_start();
include("../../config.php");

function sendMessage($conn, $userId, $friendId, $message) {

    $sql = "INSERT INTO Message(senderId, receiverId, message) VALUE($userId,$friendId, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $message);


    if ($stmt->execute()) {

        return true;

      
    }

    return false;
}


if (isset($_SESSION['userId'])) {
  
    $userId =$_SESSION['userId'] ;
    $friendId = $_POST['friendId'];
    $message = $_POST['message'];

    $messageData = sendMessage($conn, $userId, $friendId, $message);

    if($message){
        echo json_encode(array("status" => "success", "message" => " ".$_SESSION["firstName"]." ,you are message has been sent!"));
        exit();
    
    }

    echo json_encode(array("error" => "error", "message" => " ".$_SESSION["firstName"]." ,you are message has failed to  been sent!"));
    exit();




} else {
   
    echo json_encode(array("error" => "User not found"));
}

$conn->close();
?>