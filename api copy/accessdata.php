<?php
include("../config.php");
session_start();
$user = $_GET['user'];
$_SESSION['user'] = $user;


header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

if (isset($_SESSION['user'])) {
    
    $sql = "SELECT Supplier.firstname, Supplier.lastname, Ingredient.name, Orders.createdat, Orders.status, Orders.quantity FROM Orders INNER JOIN Supplier ON Supplier.id = Orders.supplierid INNER JOIN  Ingredient ON Ingredient.id = Orders.ingredientid where Orders.supplierid ='$user'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
       
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

       
        $json_response = json_encode($data);

        
        echo $json_response;
     
        exit();
    } else {
       
        http_response_code(404);
        echo json_encode(array("error" => "No data found."));
        
        exit();
    }

   
} else {
   
    http_response_code(401);
    echo json_encode(array("error" => "You do not have permission."));
    exit();
}


?>
