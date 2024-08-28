<?php

header('Content-Type: application/json');

include('../admin/menuTable/menu_db.php');

// Target revenue
$target_revenue = 50000;

// SQL query to calculate total revenue
$sql_revenue = "SELECT SUM(itemPrice * itemStock) AS total_revenue FROM (
                    SELECT itemPrice, itemStock FROM beverages
                    UNION ALL
                    SELECT itemPrice, itemStock  FROM breakfast
                    UNION ALL
                    SELECT itemPrice, itemStock  FROM desserts
                    UNION ALL
                    SELECT itemPrice, itemStock  FROM lunch
                    UNION ALL
                    SELECT itemPrice, itemStock  FROM snacks
                ) AS combined_menu";

// SQL query to count total menu items
$sql_count = "SELECT COUNT(*) AS total_items FROM (
                    SELECT itemID FROM beverages
                    UNION ALL
                    SELECT itemID FROM breakfast
                    UNION ALL
                    SELECT itemID FROM desserts
                    UNION ALL
                    SELECT itemID FROM lunch
                    UNION ALL
                    SELECT itemID FROM snacks
                ) AS combined_menu";

// SQL query to count items with negative stock
$sql_negative_stock = "SELECT COUNT(*) AS out_of_stock FROM (
                            SELECT itemStock FROM beverages WHERE itemStock <= 0
                            UNION ALL
                            SELECT itemStock FROM breakfast WHERE itemStock <=0
                            UNION ALL
                            SELECT itemStock FROM desserts WHERE itemStock <= 0
                            UNION ALL
                            SELECT itemStock FROM lunch WHERE itemStock <= 0
                            UNION ALL
                            SELECT itemStock FROM snacks WHERE itemStock <= 0
                        ) AS combined_stock";

// Fetch total revenue
$result_revenue = $conn_menu->query($sql_revenue);
$total_revenue = 0;
if ($result_revenue->num_rows > 0) {
    $row = $result_revenue->fetch_assoc();
    $total_revenue = $row['total_revenue'];
}

// Fetch total menu items
$result_count = $conn_menu->query($sql_count);
$total_items = 0;
if ($result_count->num_rows > 0) {
    $row = $result_count->fetch_assoc();
    $total_items = $row['total_items'];
}

// Fetch out-of-stock items count
$result_negative_stock = $conn_menu->query($sql_negative_stock);
$out_of_stock = 0;
if ($result_negative_stock->num_rows > 0) {
    $row = $result_negative_stock->fetch_assoc();
    $out_of_stock = $row['out_of_stock'];
}

$conn_menu->close();

// Calculate percentage of target revenue
$percentage_of_target = ($target_revenue > 0) ? ($total_revenue / $target_revenue) * 100 : 0;

echo json_encode([
    'total_revenue' => $total_revenue,
    'percentage_of_target' => $percentage_of_target,
    'total_items' => $total_items,
    'out_of_stock' => $out_of_stock
]);
?>
