<?php

include 'db_staff.php';

$sql = "SELECT * FROM admins";
$result = $conn_staff->query($sql);

$staffData = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $staffData[] = $row;
    }
}

echo json_encode($staffData);

$conn_staff->close();

?>
