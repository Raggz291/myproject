<?php
session_start();
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "ragzzybakery";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//connected successfully
?>