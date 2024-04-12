<?php
session_start();
include("../../config.php");

function getMessageData($conn, $userId, $friendId) {

    $sql = "SELECT 
    M.messageId,
    M.senderId,
    M.receiverId,
    M.message,
    M.created AS messageTimestamp,
    U1.firstName AS senderFirstName,
    U1.lastName AS senderLastName,
    U2.firstName AS receiverFirstName,
    U2.lastName AS receiverLastName
FROM 
    Message M
JOIN 
    User U1 ON M.senderId = U1.userId
JOIN 
    User U2 ON M.receiverId = U2.userId
WHERE 
    (M.senderId = $userId AND M.receiverId = $friendId) OR (M.senderId = $friendId AND M.receiverId =$userId)
ORDER BY 
    M.created; 
"
 ;
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $result = $stmt->get_result();
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
    $friendId = $_GET['friendId'];

    $messageData = getMessageData($conn, $userId, $friendId);

    echo json_encode($messageData);
} else {
   
    echo json_encode(array("error" => "User not found"));
}

$conn->close();
?>