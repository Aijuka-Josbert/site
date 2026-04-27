<?php
$host = "localhost";
$user = "root";
$password = "!Log19tan88";
$database = "beyondcode";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    echo "Failed to connect to Database: " . $conn->connect_error;
    die();
}

// Set charset to utf8mb4 for proper emoji and special character support
$conn->set_charset("utf8mb4");
?>