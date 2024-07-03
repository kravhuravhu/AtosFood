<?php
$servername = "localhost";
$username = "juniorra";
$password = "''";
$dbname = "Menu";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
