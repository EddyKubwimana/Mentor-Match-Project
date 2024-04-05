<?php
session_start();
include("../../config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userId = $_POST['userId'];

    // Check if the user is already a mentor
    $sql_check = "SELECT COUNT(*) AS count FROM Mentor WHERE userId = ?";
    $stmt_check = $conn->prepare($sql_check);
    $stmt_check->bind_param("i", $userId);
    $stmt_check->execute();
    $res = $stmt_check->get_result();
    $row = $res->fetch_assoc();

    if ($row['count'] > 0) {
        echo json_encode(array("status" => "error", "message" => " ".$_SESSION["firstName"].", You are already a Mentor"));
    } else {
        // Insert user as mentor
        $sql_insert = "INSERT INTO Mentor (userId) VALUES (?)";
        $stmt_insert = $conn->prepare($sql_insert);
        $stmt_insert->bind_param("i", $userId);
        $stmt_insert->execute();

        if ($stmt_insert) {
            echo json_encode(array("status" => "success", "message" => " ".$_SESSION["firstName"]." , You are registered successfully!"));
        } else {
            echo json_encode(array("status" => "error", "message" => "Failed to register mentor."));
        }
    }
} else {
    echo json_encode(array("status" => "error", "message" => "Invalid request method."));
}
?>
