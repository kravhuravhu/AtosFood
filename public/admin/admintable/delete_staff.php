<?php

include 'db_staff.php';

// Get data list
$userID = $_POST['adminUserID'];

// update data on db
$sql = "DELETE FROM admins WHERE userid = ?";
$stmt = $conn_staff->prepare($sql);

if ($stmt === false) {
    die("Error preparing statement: " . $conn_staff->error);
}

// Bind parameters
$stmt->bind_param("s", $userID);

// Execute the statement
if ($stmt->execute()) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $stmt->error;
}

$stmt->close();
$conn_staff->close();
?>