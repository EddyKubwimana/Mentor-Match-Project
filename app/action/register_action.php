<?php
session_start();
include("../../config.php");
// Validate and sanitize the input data
    $firstName = filter_var($_POST["firstname"], FILTER_SANITIZE_STRING);
    $lastName = filter_var($_POST["lastname"], FILTER_SANITIZE_STRING);
    $dob = $_POST["dob"]; 
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $major = filter_var($_POST["major"], FILTER_SANITIZE_STRING);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Hash the password
    $nationality = filter_var($_POST["nationality"], FILTER_SANITIZE_STRING);

        // Check if the email already exists in the database
    $sql_check = "SELECT COUNT(*) AS count FROM User WHERE email = '$email'";
    $result_check = $conn->query($sql_check);
    $row_check = $result_check->fetch_assoc();

    if ($row_check['count'] > 0) {
            // Username already exists, send 500 server error response
            http_response_code(402);
            $conn->close();
            exit("Username already exists");
            
    }

    $sql = "INSERT INTO User(firstName, lastName, dob, email,major,nationality,passwd) value ('$firstName', '$lastName', '$dob', '$email','$major','$nationality','$password')";
    if ($conn->query($sql)) {

        $userdata = "Select userId, firstName, lastName FROM User where email =$email";
        $row = $conn->query($userdata);
        $user = $row->fetch_assoc();
        $_SESSION['userId'] =$user['userId'];
        $_SESSION['firstName'] = $user['firstName'];
        $_SESSION['lastName'] = $user['lastName'];
        http_response_code(200);
        $conn->close();   
        
    } else {
        http_response_code(500);
        $conn->close();
    }

  

$conn->close();