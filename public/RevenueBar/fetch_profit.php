<?php
 
header('Content-Type: application/json');
 
include('../admin/menuTable/menu_db.php');
include('../admin/admintable/db_staff.php');
 
// Fetch total revenue from menu
$sql_menu = "SELECT SUM(itemPrice * itemStock) AS total_revenue FROM (
                SELECT itemPrice, itemStock FROM beverages
                UNION ALL
                SELECT itemPrice, itemStock FROM breakfast
                UNION ALL
                SELECT itemPrice, itemStock FROM desserts
                UNION ALL
                SELECT itemPrice, itemStock FROM lunch
                UNION ALL
                SELECT itemPrice, itemStock FROM snacks
            ) AS combined_menu";
 
$result_menu = $conn_menu->query($sql_menu);
 
$total_revenue = 0;
if ($result_menu->num_rows > 0) {
    $row = $result_menu->fetch_assoc();
    $total_revenue = $row['total_revenue'];
}
$sum = 0;
// Fetch total sales from order history
$sql_orders = "SELECT ordItemname FROM order_history";
$result_orders = $conn_staff->query($sql_orders);

$total_sales = 0;
if ($result_orders->num_rows > 0) {
    while ($row = $result_orders->fetch_assoc()) {
        $items = explode('|', $row['ordItemname']);        
        foreach ($items as $item) {
            $details = explode(';', $item);
            if (isset($details[2])) {
                $price = floatval($details[2]) * floatval(($details[1]));
                $total_sales += $price;
                $overallOrder = ($details[1] * $details[2]);
                
                $everything =explode(' ',$overallOrder);
                foreach ($everything as $everythings) {
                    if (is_numeric($everythings)) {
                        $sum += (int)$everythings;
                    }
                }
            }
        }
    }  
}

$conn_menu->close();
$conn_staff->close();
 
// Calculate profit
$profit = $total_sales - $total_revenue;

$percentage_profit = ($total_revenue > 0) ? ($profit / $total_revenue) * 100 : 0;
 
echo json_encode([
    'total_profit' => $profit,
    'percentage_profit' => $percentage_profit,
    'sum' => $sum, 
    'stock' => $total_revenue, 
    'history' => $total_sales
]);
?>