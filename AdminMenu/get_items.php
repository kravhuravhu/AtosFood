<?php

header('Content-Type: application/json');

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

$sql = "SELECT itemID, itemName, itemDescription, itemPrice, itemImage, 'Breakfast' as itemCategory FROM Breakfast
        UNION ALL
        SELECT itemID, itemName, itemDescription, itemPrice, itemImage, 'Lunch' as itemCategory FROM Lunch
        UNION ALL
        SELECT itemID, itemName, itemDescription, itemPrice, itemImage, 'Snacks' as itemCategory FROM Snacks
        UNION ALL
        SELECT itemID, itemName, itemDescription, itemPrice, itemImage, 'Desserts' as itemCategory FROM Desserts
        UNION ALL
        SELECT itemID, itemName, itemDescription, itemPrice, itemImage, 'Beverages' as itemCategory FROM Beverages";

$result = $conn->query($sql);

$items = array();
while($row = $result->fetch_assoc()) {
    $items[] = $row;
}

echo json_encode($items);

$conn->close();
?>
