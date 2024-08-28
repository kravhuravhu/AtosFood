<?php

header('Content-Type: application/json');

include 'customer_db.php';

// Check if id is set
if (!isset($_POST['id'])) {
    echo json_encode(array("error" => "Required fields are missing"));
    exit();
}

$id = $_POST['id'];

echo json_decode("From delete: " . $id); 
 
// Prepare and bind
$sql = "DELETE FROM users WHERE id = ?";
$stmt = $conn_customer->prepare($sql);
if (!$stmt) {
    echo json_encode(array("error" => "Prepare statement failed: " . $conn_customer->error));
    exit();
}
$stmt->bind_param("s", $id);
 
if ($stmt->execute()) {
    echo json_encode(array("success" => "Item deleted successfully"));
} else {
    echo json_encode(array("error" => "Error deleting item: " . $stmt->error));
}
 
$stmt->close();
$conn_customer->close();
?>