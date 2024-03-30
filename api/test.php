<?php

include("../config.php");
session_start();

// Validate and sanitize the input data
    $firstName = filter_var($_POST["firstname"], FILTER_SANITIZE_STRING);
    $lastName = filter_var($_POST["lastname"], FILTER_SANITIZE_STRING);
    $dob = $_POST["dob"]; 
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $major = filter_var($_POST["major"], FILTER_SANITIZE_STRING);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Hash the password
    $nationality = filter_var($_POST["nationality"], FILTER_SANITIZE_STRING);
    echo "First Name : ".$firstName;

    echo "Last Name : ".$lastName;
    echo "dob : ".$dob;
    echo "major : ".$major;
    echo "email: ".$email;
    echo "password : ".$password;
    echo "nationality: ".$nationality;

    // Prepare the SQL statement with placeholders
    $sql = "INSERT INTO User(firstName, lastName, dob, email,major,nationality,passwd) value ('$firstName', '$lastName', '$dob', '$email','$major','$nationality','$password')";
    if ($conn->query($sql)) {
        // Insertion successful
        echo "User registered successfully!";
    } else {
        echo $conn->error;
        echo "vyanze";
    }

  

$conn->close();