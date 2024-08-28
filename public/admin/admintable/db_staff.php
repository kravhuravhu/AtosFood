<?php
$servername_staff = "localhost";
$username_staff = "juniorra";
$password_staff = "arrithnius";
$dbname_staff = "staff";

// Create connection
$conn_staff = new mysqli($servername_staff, $username_staff, $password_staff, $dbname_staff);

// Check connection 
if ($conn_staff->connect_error) {
    die("Connection to staff database failed: " . $conn_staff->connect_error);
}
?>
