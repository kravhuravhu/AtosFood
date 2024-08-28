<?php
// Include database connection files
include('../admin/admintable/db_staff.php');
include('../admin/menuTable/menu_db.php');  
 
// Query for order history from staff database
$sql = "SELECT * FROM order_history";
$result = $conn_staff->query($sql);
 
// Query for items from menu database
$sql_menu = "
    SELECT itemID, itemName, itemDescription, itemStock, itemPrice, itemImage, itemSpecs, itemCategory
    FROM beverages
    UNION ALL
    SELECT itemID, itemName, itemDescription, itemStock, itemPrice, itemImage, itemSpecs, itemCategory
    FROM breakfast
    UNION ALL
    SELECT itemID, itemName, itemDescription, itemStock, itemPrice, itemImage, itemSpecs, itemCategory
    FROM desserts
    UNION ALL
    SELECT itemID, itemName, itemDescription, itemStock, itemPrice, itemImage, itemSpecs, itemCategory
    FROM lunch
    UNION ALL
    SELECT itemID, itemName, itemDescription, itemStock, itemPrice, itemImage, itemSpecs, itemCategory
    FROM snacks";
 
$result_menu = $conn_menu->query($sql_menu);
 
// Check if queries were successful
if ($result && $result_menu) {
    $orders = array();
    while ($row = $result->fetch_assoc()) {
        $orders['order_history'][] = $row;
    }
 
    $menu_items = array();
    while ($row_menu = $result_menu->fetch_assoc()) {
        $menu_items[] = $row_menu;
    }
 
    // Combine results into a single array
    $combined_results = array_merge($orders, ['menu_items' => $menu_items]);
 
    echo json_encode($combined_results);
} else {
    echo "Error: " . $conn_staff->error;
}
 
// Close connections
$conn_staff->close();
$conn_menu->close();
?>
