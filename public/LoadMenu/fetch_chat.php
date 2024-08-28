<?php
// Database connection
$servername = "localhost";
$username = "juniorra";
$password = "arrithnius";
$dbname = "staff";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ordItemquantity, ordCategory FROM order_history";
$result = $conn->query($sql);

$orderHistory = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $orderHistory[] = $row;
    }
} 

$conn->close();

echo json_encode($orderHistory);
?>
