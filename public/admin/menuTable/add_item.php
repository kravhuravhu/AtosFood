<?php

header('Content-Type: application/json');

include('menu_db.php');

$itemName = $_POST['itemName'];
$itemDescription = $_POST['itemDescription'];
$itemSpecs = $_POST['itemSpecs'];
$itemStock = $_POST['itemStock'];
$itemPrice = $_POST['itemPrice'];
$itemCategory = $_POST['itemCategory'];
$itemImage = $_FILES['itemImage'];

// Handle file upload
$uploadDir = '../../LoadMenu/Uploads/';
$targetFileName = uniqid() . basename($itemImage["name"]);
$targetFile = $uploadDir . $targetFileName;
move_uploaded_file($itemImage['tmp_name'], $targetFile);


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
$sql = "INSERT INTO $table (itemName, itemDescription, itemSpecs, itemStock, itemPrice, itemImage, itemCategory) VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn_menu->prepare($sql);
$stmt->bind_param("sssssss", $itemName, $itemDescription, $itemSpecs, $itemStock, $itemPrice, $targetFile, $itemCategory);

if ($stmt->execute()) {
    echo json_encode(array("success" => "Item added successfully"));
} else {
    echo json_encode(array("error" => "Error adding item"));
}

$stmt->close();
$conn_menu->close();
?>
