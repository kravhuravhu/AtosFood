<?php
header('Content-Type: application/json');

// Include database configuration
include('../admin/menuTable/menu_db.php');

// Retrieve cart items from the request
$cartItems = isset($_POST['cartItems']) ? json_decode($_POST['cartItems'], true) : [];

try {
    $conn_menu->begin_transaction();

    foreach ($cartItems as $item) {
        $itemName = $item['name'];
        $itemQuantity = isset($item['quantity']) ? $item['quantity'] : 0;

        // Prepare update query for each category table
        $updateQueries = [];
        $categories = ['beverages', 'breakfast', 'desserts', 'lunch', 'snacks'];

        foreach ($categories as $category) {
            $updateQueries[] = "UPDATE $category SET itemStock = itemStock - $itemQuantity WHERE itemName = '$itemName'";
        }

        // Execute update queries for each category
        foreach ($updateQueries as $query) {
            if (!$conn_menu->query($query)) {
                throw new Exception('Update query failed');
            }
        }
    }

    $conn_menu->commit();

    echo json_encode(array('message' => 'Stock updated successfully'));

} catch (Exception $e) {

    $conn_menu->rollback(); 

    echo json_encode(array('message' => 'Database error: ' . $e->getMessage()));
}
?>
