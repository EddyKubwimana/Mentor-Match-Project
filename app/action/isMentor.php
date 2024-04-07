<?php
session_start();
include("../../config.php");

// Function to check mentor status
function isMentor($conn, $userId) {
    $sql = "SELECT * FROM Mentor WHERE userId = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        return ["registered", "withdraw"];
    } else {
        return ["unregistered", "register"];
    }
}

// Function to check mentee status
function isMentee($conn, $userId) {
    $sql = "SELECT * FROM Mentee WHERE userId = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        return ["registered", "withdraw"];
    } else {
        return ["unregistered", "register"];
    }
}

// Check if user is logged in
if (isset($_SESSION['userId'])) {
    $userId = $_SESSION['userId'];
    
    // Get mentor and mentee status
    $mentorStatus = isMentor($conn, $userId);
    $menteeStatus = isMentee($conn, $userId);

    // Prepare user data array
    $userData = array(
        "userId" => $userId,
        "mentorStatus" => $mentorStatus[0],
        "mentorAction" => $mentorStatus[1],
        "menteeStatus" => $menteeStatus[0],
        "menteeAction" => $menteeStatus[1]
    );

    // Output user data as JSON
    echo json_encode($userData);
} else {
    // Handle case when user is not logged in
    echo json_encode(array("error" => "User not logged in"));
}

// Close database connection
$conn->close();
?>
