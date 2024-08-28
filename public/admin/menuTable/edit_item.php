<?php

header('Content-Type: application/json');

include('menu_db.php');
 
$itemId = $_POST['editItemId'];
$itemName = $_POST['editItemName'];
$itemDescription = $_POST['editItemDescription'];
$itemSpecs = $_POST['editItemSpecs'];
$itemStock = $_POST['editItemStock'];
$itemPrice = $_POST['editItemPrice'];
$itemCategory = $_POST['editItemCategory'];

// Check if an image file is uploaded
$imageUpdated = isset($_FILES['editItemImage']) && $_FILES['editItemImage']['error'] == UPLOAD_ERR_OK;
 
// Handle file upload
$uploadDir = '../../LoadMenu/Uploads/';
$targetFile = null;
if ($imageUpdated) {
    $targetFileName = uniqid() . basename($_FILES['editItemImage']["name"]);
    $targetFile = $uploadDir . $targetFileName;
    move_uploaded_file($_FILES['editItemImage']['tmp_name'], $targetFile);
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
$sql = "UPDATE $table SET itemName = ?, itemDescription = ?, itemSpecs = ?, itemStock = ?, itemPrice = ?";
$params = array($itemName, $itemDescription, $itemSpecs, $itemStock, $itemPrice);
 
if ($imageUpdated) {
    $sql .= ", itemImage = ?";
    $params[] = $targetFile;
}
 
$sql .= " WHERE itemID = ?";
$params[] = $itemId;
 
$stmt = $conn_menu->prepare($sql);
if (!$stmt) {
    echo json_encode(array("error" => "Prepare statement failed: " . $conn_menu->error));
    exit();
}
 
$stmt->bind_param(str_repeat('s', count($params)), ...$params);
 
if ($stmt->execute()) {
    echo json_encode(array("success" => "Item updated successfully"));
} else {
    echo json_encode(array("error" => "Error updating item: " . $stmt->error));
}
 
$stmt->close();
$conn_menu->close();
?>
