<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header('Content-Type: application/json');

include 'customer_db.php';

$editname = $_POST['editname'];
$editsurname = $_POST['editsurname'];
$editemail = $_POST['editemail'];
$editpassword = $_POST['editpassword'];
$id = $_POST['editid'];

$editpassword = password_hash($editpassword, PASSWORD_BCRYPT);

// Prepare the SQL statement
$sql = "UPDATE `users` SET `name` = ?, `surname` = ?, `email` = ?, `password` = ? WHERE `id` = ?";
$params = array($editname, $editsurname, $editemail, $editpassword, $id);

$stmt = $conn_customer->prepare($sql);
if (!$stmt) {
    echo json_encode(array("error" => "Prepare statement failed: " . $conn_customer->error));
    exit();
}

$stmt->bind_param("sssss", $editname, $editsurname, $editemail, $editpassword, $id);

if ($stmt->execute()) {
    echo json_encode(array("success" => "Customer Information updated successfully"));
} else {
    echo json_encode(array("error" => "Error updating item: " . $stmt->error));
}

$stmt->close();
$conn_customer->close();
?>
