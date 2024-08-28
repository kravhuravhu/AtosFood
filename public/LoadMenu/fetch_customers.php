<?php

header('Content-Type: application/json');

include '../admin/customers/customer_db.php';

$sql = "SELECT id, name, surname, email, password, created_at FROM users";

$result = $conn_customer->query($sql);

$customerList = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $customerList[] = $row;
    }
}

$conn_customer->close();

echo json_encode($customerList);
?>
