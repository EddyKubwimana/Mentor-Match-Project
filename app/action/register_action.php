<?php
session_start();
include("../../config.php");

if ($conn->connect_error) {
    echo json_encode(array("status" => "error", "message" => "Database connection failed: " . $conn->connect_error));
    exit();
}


$firstName = filter_var($_POST["firstname"], FILTER_SANITIZE_STRING);
$lastName = filter_var($_POST["lastname"], FILTER_SANITIZE_STRING);
$dob = $_POST["dob"];
$email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
$major = filter_var($_POST["major"], FILTER_SANITIZE_STRING);
$password = password_hash($_POST["password"], PASSWORD_DEFAULT); 
$nationality = filter_var($_POST["nationality"], FILTER_SANITIZE_STRING);

$sql_check = "SELECT COUNT(*) AS count FROM User WHERE email = ?";
$stmt_check = $conn->prepare($sql_check);
$stmt_check->bind_param("s", $email);
$stmt_check->execute();
$result_check = $stmt_check->get_result();
$row_check = $result_check->fetch_assoc();

if ($row_check['count'] > 0) {
    echo json_encode(array("status" => "error", "message" => "You already have an account!"));
    exit();
} else {
   
    $sql = "INSERT INTO User(firstName, lastName, dob, email, major, nationality, passwd) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssss", $firstName, $lastName, $dob, $email, $major, $nationality, $password);
    if ($stmt->execute()) {
      
        $sql_userdata = "SELECT userId, firstName, lastName FROM User WHERE email = ?";
        $stmt_userdata = $conn->prepare($sql_userdata);
        $stmt_userdata->bind_param("s", $email);
        $stmt_userdata->execute();
        $result_userdata = $stmt_userdata->get_result();
        $user = $result_userdata->fetch_assoc();
        $_SESSION['userId'] = $user['userId'];
        $_SESSION['firstName'] = $user['firstName'];
        $_SESSION['lastName'] = $user['lastName'];
        echo json_encode(array("status" => "success", "message" => "You have successfully created an account!"));
        exit();
    } else {
        echo json_encode(array("status" => "error", "message" => "Failed to create an account, please try again!"));
        exit();
    }
}
?>
