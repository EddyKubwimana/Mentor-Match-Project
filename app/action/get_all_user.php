<?php
session_start();

include("../../config.php");

function getAllUser($conn, $userId){
    $userData = array();
    $sql = "SELECT userId,firstName,lastName FROM User where userId !=$userId";
    $result = $conn->query($sql);
   
     while($row = $result->fetch_assoc()){

           $userData[] = $row;

       };
      
    
    return $userData;
}


if (isset($_SESSION['userId'])) {
  
    $Id =$_SESSION['userId'] ;

    $userData = getAllUser($conn, $Id);

    echo json_encode($userData);
} else {
   
    echo json_encode(array("error" => "User not logged in"));
}

$conn->close();
?>