<?php
$mysqli = new mysqli('localhost', 'nqobile', 'Smelo@123', 'todo_list');

if ($mysqli->connect_error) {
die('Connection Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

$sql = "SELECT * FROM tasks";
$result = $mysqli->query($sql);

$tasks = array();
while ($row = $result->fetch_assoc()) {
$tasks[] = $row;
}

$mysqli->close();
echo json_encode($tasks);
?>
