<?php
header('Content-Type: application/json');
 
include('../admin/admintable/db_staff.php');
 
$data = json_decode(file_get_contents('php://input'), true);
$email = $data['email'];
$password = $data['password'];
 
error_log('Received data: ' . json_encode($data));
 
$sql = 'SELECT `firstName`, `lastName`, `password` FROM `admins` WHERE email = ?';
$stmt = $conn_staff->prepare($sql);
 
if (!$stmt) {
    error_log('Prepare failed: ' . $conn_staff->error);
    echo json_encode(['success' => false, 'message' => 'Database error']);
    exit;
}
 
$stmt->bind_param('s', $email);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();
 
if ($user) {
    $db_password_hashed = $user['password'];
 
    // Verify the hashed password
    if (password_verify($password, $db_password_hashed)) {
        $username = $user['firstName'] . ' ' . $user['lastName'];
        error_log('Login successful for user: ' . $username);
        echo json_encode(['success' => true, 'username' => $username]);
    } else {
        error_log('Password verification failed for email: ' . $email);
        echo json_encode(['success' => false, 'message' => 'Invalid email or password']);
    }
} else {
    error_log('No user found for email: ' . $email);
    echo json_encode(['success' => false, 'message' => 'Invalid email or password']);
}
 
$stmt->close();
$conn_staff->close();
?>
 