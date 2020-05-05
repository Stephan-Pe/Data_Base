<?php

$servername = "localhost";
$dbUsername = "root";
$dbPassword = "root";
$dbName = "test";

$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbName);

// Check Connection
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

echo "You are logged in";
