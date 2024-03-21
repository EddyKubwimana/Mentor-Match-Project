<?php
  echo "I am inside the script";
  $servername = 'lgg2gx1ha7yp2w0k.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
  $username = 'c5klz0o20nee6ae9';
  $password = 'l2fbd7spxdgwxg99';
  $database = 'dgektj0gzl6h7k2x';
  $port = 3306;

// Create connection
$conn = new mysqli($servername, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

// Perform SQL queries, etc. here

// Close connection
$conn->close();
?>
