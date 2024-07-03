<?php

header('Content-Type: application/json');

include 'menu_db.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$itemId = $_POST['editItemId'];
$itemName = $_POST['editItemName'];
$itemDescription = $_POST['editItemDescription'];
$itemPrice = $_POST['editItemPrice'];
$itemCategory = $_POST['editItemCategory'];
$itemImage = $_FILES['editItemImage'];

// Handle file upload
$targetFile = '';
if ($itemImage['size'] > 0) {
    $uploadDir = 'LoadMenu/';
    $targetFile = $targetDir . uniqid() . basename($itemImage["name"]);
    if (!move_uploaded_file($itemImage["tmp_name"], '../../' . $targetFile)) {
        echo json_encode(array("error" => "Error uploading file"));
        exit();
    }
}

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

// Prepare the SQL statement
$sql = "UPDATE $table SET itemName = ?, itemDescription = ?, itemPrice = ?";
$params = array($itemName, $itemDescription, $itemPrice);

if ($targetFile) {
    $sql .= ", itemImage = ?";
    $params[] = $targetFile;
}

$sql .= " WHERE itemID = ?";
$params[] = $itemId;

$stmt = $conn->prepare($sql);
if (!$stmt) {
    echo json_encode(array("error" => "Prepare statement failed: " . $conn->error));
    exit();
}

$stmt->bind_param(str_repeat('s', count($params)), ...$params);

if ($stmt->execute()) {
    echo json_encode(array("success" => "Item updated successfully"));
} else {
    echo json_encode(array("error" => "Error updating item: " . $stmt->error));
}

$stmt->close();
$conn->close();
?>