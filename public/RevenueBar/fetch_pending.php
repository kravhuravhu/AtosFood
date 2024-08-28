<?php
 
header('Content-Type: application/json');
 
include('../admin/admintable/db_staff.php');
 
// SQL query to count pending orders
$sql_pending = "SELECT COUNT(*) AS pending_orders FROM order_history WHERE ordStatus = 'Processing'";
 
// SQL query to count delivered orders
$sql_delivered = "SELECT COUNT(*) AS delivery_orders FROM order_history WHERE ordStatus = 'Delivered'";
 
// SQL query to count all items in order history
$sql_total_items = "SELECT COUNT(*) AS total_items FROM (
                        SELECT orderID FROM order_history
                    ) AS order_items";
 
// Fetch pending orders count
$result_pending = $conn_staff->query($sql_pending);
$pending_orders = 0;
if ($result_pending->num_rows > 0) {
    $row = $result_pending->fetch_assoc();
    $pending_orders = $row['pending_orders'];
}
 
// Fetch delivered orders count
$result_delivered = $conn_staff->query($sql_delivered);
$delivery_orders = 0;
if ($result_delivered->num_rows > 0) {
    $row = $result_delivered->fetch_assoc();
    $delivery_orders = $row['delivery_orders'];
}
 
// Fetch total items count in order history
$result_total_items = $conn_staff->query($sql_total_items);
$total_items = 0;
if ($result_total_items->num_rows > 0) {
    $row = $result_total_items->fetch_assoc();
    $total_items = $row['total_items'];
}
 
$conn_staff->close();
 
// Calculate percentage of pending orders
$percentage_pending = ($total_items > 0) ? ($pending_orders / $total_items) * 100 : 0;
$percentage_delivered = ($total_items > 0) ? ($delivery_orders / $total_items) * 100 : 0;
 
echo json_encode([
    'pending_orders' => $pending_orders,
    'delivery_orders' => $delivery_orders,
    'percentage_pending' => $percentage_pending,
    'percentage_delivered' => $percentage_delivered,
    'total_items' => $total_items
]);
?>