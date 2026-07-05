<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "shamrock_medical_centre";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

// Uncomment this line if you want to test the connection
// echo "Database Connected Successfully!";

?>