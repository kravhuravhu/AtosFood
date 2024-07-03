<?php

header('Content-Type: application/json');

include 'menu_db.php';

$itemName = $_POST['itemName'];
$itemDescription = $_POST['itemDescription'];
$itemPrice = $_POST['itemPrice'];
$itemCategory = $_POST['itemCategory'];
$itemImage = $_FILES['itemImage'];

// Handle file upload
$uploadDir = '../../LoadMenu/Uploads/';
$targetFileName = uniqid() . basename($itemImage["name"]);
$targetFile = $uploadDir . $targetFileName;

// Determine table based on category
$table = '';
switch ($itemCategory) {
    case 'Breakfast':
        $table = 'Breakfast';
        break;
    case 'Lunch':
        $table = 'Lunch';
        break;
    case 'Snacks':
        $table = 'Snacks';
        break;
    case 'Desserts':
        $table = 'Desserts';
        break;
    case 'Beverages':
        $table = 'Beverages';
        break;
    default:
        echo json_encode(array("error" => "Invalid category"));
        exit();
}

// Prepare and bind
$sql = "INSERT INTO $table (itemName, itemDescription, itemPrice, itemImage, itemCategory) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss", $itemName, $itemDescription, $itemPrice, $targetFile, $itemCategory);

if ($stmt->execute()) {
    echo json_encode(array("success" => "Item added successfully"));
} else {
    echo json_encode(array("error" => "Error adding item"));
}

$stmt->close();
$conn->close();
?>
