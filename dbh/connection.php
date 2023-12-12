<?php
//DATABASE CONNCTION
$servername = "localhost";
$username = "root";
$password = "";
$database = "signature_cuisine";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
