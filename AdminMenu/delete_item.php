<?php

header('Content-Type: application/json');

include 'menu_db.php';
 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Check if itemId and itemCategory are set
if (!isset($_POST['itemId']) || !isset($_POST['itemCategory'])) {
    echo json_encode(array("error" => "Required fields are missing"));
    exit();
}

$itemId = $_POST['itemId'];
$itemCategory = $_POST['itemCategory'];
 
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
$sql = "DELETE FROM $table WHERE itemID = ?";
$stmt = $conn->prepare($sql);
if (!$stmt) {
    echo json_encode(array("error" => "Prepare statement failed: " . $conn->error));
    exit();
}
$stmt->bind_param("s", $itemId);
 
if ($stmt->execute()) {
    echo json_encode(array("success" => "Item deleted successfully"));
} else {
    echo json_encode(array("error" => "Error deleting item: " . $stmt->error));
}
 
$stmt->close();
$conn->close();
?>