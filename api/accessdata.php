<?php
include("../config.php");
session_start();
$user = $_GET['user'];
$_SESSION['user'] = $user;

// Set headers to allow cross-origin requests (CORS)
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

if (isset($_SESSION['user'])) {
    // Fetch data from the database
    $sql = "SELECT Supplier.firstname, Supplier.lastname, Ingredient.name, Orders.createdat, Orders.status, Orders.quantity FROM Orders INNER JOIN Supplier ON Supplier.id = Orders.supplierid INNER JOIN  Ingredient ON Ingredient.id = Orders.ingredientid where Orders.supplierid ='$user'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Store fetched data in an array
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        // Encode the data to JSON format
        $json_response = json_encode($data);

        // Return the JSON response
        echo $json_response;
        // Stop execution after sending JSON response
        exit();
    } else {
        // Return error message in JSON format with appropriate HTTP response code
        http_response_code(404); // Not Found
        echo json_encode(array("error" => "No data found."));
        // Stop execution after sending JSON response
        exit();
    }

    // Close database connection
    $conn->close();
} else {
    // Return error message in JSON format with appropriate HTTP response code
    http_response_code(401); // Unauthorized
    echo json_encode(array("error" => "You do not have permission."));
    // Stop execution after sending JSON response
    exit();
}
?>
