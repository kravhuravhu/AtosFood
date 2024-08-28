<?php

header('Content-Type: application/json');

include('../admin/menuTable/menu_db.php');

// Query to fetch 4 most recent items from all categories
$sql = "SELECT * FROM (
            SELECT * FROM Breakfast
            UNION ALL
            SELECT * FROM Beverages
            UNION ALL
            SELECT * FROM Snacks
            UNION ALL
            SELECT * FROM Desserts
            UNION ALL
            SELECT * FROM Lunch
        ) AS combined
        ORDER BY itemDate DESC, itemTime DESC
        LIMIT 4";


$result = $conn_menu->query($sql);

if (!$result) {
    die('Error executing query: ' . $conn_menu->error);
}

if ($result->num_rows > 0) {
    $items = array();
    while ($row = $result->fetch_assoc()) {
        $row['itemImage'] = 'LoadMenu/Uploads/' . basename($row['itemImage']);
        $items[] = $row;
    }
    echo json_encode($items);
} else {
    echo json_encode(array());
}

$conn_menu->close();
?>
