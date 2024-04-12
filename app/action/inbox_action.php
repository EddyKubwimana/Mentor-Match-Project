<?php

session_start();
include("../../config.php");

function getMessageData($conn, $userId) {

    $sql = "SELECT U.userId, U.firstName, U.lastName
    FROM User U
    JOIN (
        SELECT receiverId AS counterpartId FROM Message WHERE senderId =$userId
        UNION
        SELECT senderId AS counterpartId FROM Message WHERE receiverId = $userId
    ) AS counterpartIds ON U.userId = counterpartIds.counterpartId
";
   $result = $conn->query($sql);
    $messageData = array();
    if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()){

            $messageData[] = $row;
    
           };
      
    }

    return $messageData;
}


if (isset($_SESSION['userId'])) {
  
    $userId =$_SESSION['userId'] ;

    $messageData = getMessageData($conn, $userId);

    echo json_encode($messageData);
} else {
   
    echo json_encode(array("error" => "User not found"));
}

$conn->close();
?>