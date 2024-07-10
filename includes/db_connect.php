<?php
$servername = "localhost";
$username = "postgres";
$password = "postgres";
$dbname = "ragzzy_bakery";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//connected successfully
?>