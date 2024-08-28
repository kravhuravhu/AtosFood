<?php

header('Content-Type: application/json');

$servername_customer = "localhost";
$username_customer = "juniorra";
$password_customer = "arrithnius"; 
$dbname_customer = "atos_food";

// Create connection
$conn_customer = new mysqli($servername_customer, $username_customer, $password_customer, $dbname_customer);

// Check connection
if ($conn_customer->connect_error) {
    die("Connection to customer database failed: " . $conn_customer->connect_error);
}
?>