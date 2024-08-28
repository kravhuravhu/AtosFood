<?php
$data = json_decode(file_get_contents('php://input'), true);
$id = $data['id'];
$taskText = $data['task_text'];

$mysqli = new mysqli('localhost', 'username', 'password', 'staff');

if ($mysqli->connect_error) {
die('Connection Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

$sql = "UPDATE tasks SET task_text='$taskText' WHERE id=$id";
$mysqli->query($sql);

$mysqli->close();
?>
