<?php
$servername_menu = "localhost";
$username_menu = "juniorra";
$password_menu = "arrithnius"; 
$dbname_menu = "menu";

// Create connection
$conn_menu = new mysqli($servername_menu, $username_menu, $password_menu, $dbname_menu);

// Check connection
if ($conn_menu->connect_error) {
    die("Connection to menu database failed: " . $conn_menu->connect_error);
}
?>