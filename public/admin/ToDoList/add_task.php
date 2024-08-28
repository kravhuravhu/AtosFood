<?php

$data = json_decode(file_get_contents('php://input'), true);
$taskText = $data['task_text'];

$mysqli = new mysqli('localhost', 'nqobile', 'Smelo@123', 'todo_list');

if ($mysqli->connect_error) {
die('Connection Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

$sql = "INSERT INTO tasks (task_text) VALUES ('$taskText')";
$mysqli->query($sql);

$taskId = $mysqli->insert_id;
$createdAt = date('Y-m-d H:i:s');

$mysqli->close();
echo json_encode(['id' => $taskId, 'task_text' => $taskText, 'created_at' => $createdAt]);
?>

