<?php
session_start();
include("../../config.php");

  $email = mysqli_real_escape_string($conn,$_POST['email']);
  $password = mysqli_real_escape_string($conn,$_POST['password']);
  
  $sql = "SELECT userId, firstName, lastName, passwd FROM User WHERE email = '$email'";
  $result = mysqli_query($conn, $sql);
  if ($result->num_rows>0) {
      $row = mysqli_fetch_assoc($result);
      $hashedPasswordFromDatabase = $row['passwd'];
  
      if (password_verify($password, $hashedPasswordFromDatabase)) {

            $_SESSION['userId']=$row['userId'];
            $_SESSION['firstName']=$row['firstName'];
            $_SESSION['lastName']=$row['firstName'];
            http_response_code(200);
            mysqli_close($conn);
            exit();

            
       } else {

            http_response_code(402);
            mysqli_close($conn);
            exit();
          }
        
          }

     else{

    http_response_code(403);
    mysqli_close($conn);
    mysqli_close($conn);
    exit();



    }
    