<?php

include ('db_staff.php');

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Retrieve data
    $firstName = $_POST['adminFirst'];
    $lastName = $_POST['adminLast'];
    $email = $_POST['adminEmail'];
    $password = $_POST['adminPassc'];
    $phone = $_POST['adminPhone'];
    $activeSince = $_POST['adminActiveSince'];
    $userID = $_POST['adminUserID'];

    // hash the password
    $h_password = password_hash($password, PASSWORD_DEFAULT);

    // truncate to 10 characters
    //$h_password = substr($h_password, 0, 10);

    // insert data into db
    $sql = "INSERT INTO `admins`(`userID`, `firstName`, `lastName`, `email`, `phone`, `activeSince`, `password`)
            VALUES ('$userID', '$firstName', '$lastName', '$email', '$phone', '$activeSince', '$h_password')";

    if ($conn_staff->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn_staff->error;
    }
}

// Close MySQL connection
$conn_staff->close();
?>