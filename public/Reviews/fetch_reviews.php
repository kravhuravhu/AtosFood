<?php
header('Content-Type: application/json');
include('../admin/menuTable/menu_db.php');

// Perform SQL query
$sql = "SELECT name, surname, comment, rating, datePosted FROM reviews";
$result = $conn_menu->query($sql);

// Check for errors
if (!$result) {
    echo json_encode(['error' => 'Database query error: ' . $conn_menu->error]);
    exit;
}

// Fetch results into array
$reviews = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $reviews[] = $row;
    }
} else {
    echo json_encode(['error' => 'No reviews found for this item']);
    exit;
}

$conn_menu->close();

// Output reviews as JSON
echo json_encode($reviews);
?>
