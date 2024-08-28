<?php
header('Content-Type: application/json');

include('../admin/menuTable/menu_db.php');

// Retrieve images
$sqls = [
    "SELECT * FROM beverages ORDER BY RAND() LIMIT 3",
    "SELECT * FROM breakfast ORDER BY RAND() LIMIT 2",
    "SELECT * FROM desserts ORDER BY RAND() LIMIT 3",
    "SELECT * FROM lunch ORDER BY RAND() LIMIT 2",
    "SELECT * FROM snacks ORDER BY RAND() LIMIT 2"
];

$images = array();

foreach ($sqls as $sql) {
    $result = $conn_menu->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $row['itemImage'] = 'LoadMenu/Uploads/' . basename($row['itemImage']);
            $images[] = $row;
        }
    }
}

$conn_menu->close();

// Shuffle the array
shuffle($images);

echo json_encode($images);

?>