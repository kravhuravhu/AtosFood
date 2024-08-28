<?php

include 'db_staff.php';

// Get the data first
$userID = $_POST['adminUserID'];
$firstName = $_POST['adminFirst'];
$lastName = $_POST['adminLast'];
$email = $_POST['adminEmail'];
$passc = $_POST['adminPassc'];
$phone = $_POST['adminPhone'];
$activeSince = $_POST['adminActiveSince'];

// hash the password
$h_password = password_hash($password, PASSWORD_DEFAULT);

// truncate to 10 characters
//$h_password = substr($h_password, 0, 10);

// update data on db
$sql = "UPDATE `admins` SET `firstname` = ?, `lastname` = ?, `email` = ?, phone = ?, `activeSince` = ?, `password` = ? WHERE `userid` = ?";
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die("Error preparing statement: " . $conn->error);
}

// Bind parameters
$stmt->bind_param("sssssss", $firstName, $lastName, $email, $phone, $activeSince, $h_password, $userID);

// Execute the statement
if ($stmt->execute()) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>