<?php

header('Content-Type: application/json');

// Database configuration
$host = 'localhost';
$dbname = 'staff';
$username = 'juniorra';
$password = "arrithnius";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo json_encode(array('message' => 'Database connection error: ' . $e->getMessage()));
    exit;
}

// Get the POST data
$data = json_decode(file_get_contents('php://input'), true);
$orderId = $data['orderId'];
$newStatus = $data['newStatus'];

try {
    $sql = "UPDATE order_history SET ordStatus = :newStatus WHERE orderID = :orderId";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':newStatus', $newStatus);
    $stmt->bindParam(':orderId', $orderId);
    $stmt->execute();

    echo json_encode(array('message' => 'success'));

} catch (PDOException $e) {
    echo json_encode(array('message' => 'Database error: ' . $e->getMessage()));
}
?>
