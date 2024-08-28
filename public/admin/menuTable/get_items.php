<?php

header('Content-Type: application/json');

include('menu_db.php');

$sql = "SELECT itemID, itemName, itemDescription, itemStock, itemPrice, itemImage, itemSpecs, itemCategory FROM beverages
        UNION ALL
        SELECT itemID, itemName, itemDescription, itemStock, itemPrice, itemImage, itemSpecs, itemCategory FROM breakfast
        UNION ALL
        SELECT itemID, itemName, itemDescription, itemStock, itemPrice, itemImage, itemSpecs, itemCategory FROM desserts
        UNION ALL
        SELECT itemID, itemName, itemDescription, itemStock, itemPrice, itemImage, itemSpecs, itemCategory FROM lunch
        UNION ALL
        SELECT itemID, itemName, itemDescription, itemStock, itemPrice, itemImage, itemSpecs, itemCategory FROM snacks";

$result = $conn_menu->query($sql);

$menuItems = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $row['itemImage'] = 'LoadMenu/Uploads/' . basename($row['itemImage']);
        $menuItems[] = $row;
    }
}

$conn_menu->close();

echo json_encode($menuItems);
?>