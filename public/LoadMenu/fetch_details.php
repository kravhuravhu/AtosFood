<?php
header('Content-Type: application/json');

include('../admin/menuTable/menu_db.php');

$itemID = isset($_GET['id']) ? $conn_menu->real_escape_string($_GET['id']) : '';

if (empty($itemID)) {
    echo json_encode(['error' => 'Invalid item ID']);
    exit;
}

$sql = "SELECT itemID, itemName, itemDescription, itemPrice, itemImage FROM (
            SELECT itemID, itemName, itemDescription, itemPrice, itemImage FROM beverages
            UNION ALL
            SELECT itemID, itemName, itemDescription, itemPrice, itemImage FROM breakfast
            UNION ALL
            SELECT itemID, itemName, itemDescription, itemPrice, itemImage FROM desserts
            UNION ALL
            SELECT itemID, itemName, itemDescription, itemPrice, itemImage FROM lunch
            UNION ALL
            SELECT itemID, itemName, itemDescription, itemPrice, itemImage FROM snacks
        ) AS menu_items WHERE itemID = '$itemID'";

$result = $conn_menu->query($sql);

$itemDetails = array();
if ($result->num_rows > 0) {
    $itemDetails = $result->fetch_assoc();
    $itemDetails['itemImage'] = 'LoadMenu/Uploads/' . basename($itemDetails['itemImage']);
} else {
    echo json_encode(['error' => 'Item not found']);
    exit;
}

$conn_menu->close();

echo json_encode($itemDetails);
?>
