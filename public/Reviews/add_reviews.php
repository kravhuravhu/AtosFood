<?php
header('Content-Type: application/json');

// Include database connection logic
include('../admin/menuTable/menu_db.php'); // Adjust the path as per your file structure

$response = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['reviewFirst'];
    $lastName = $_POST['reviewLast'];
    $rating = $_POST['reviewRating'];
    $comment = $_POST['reviewComment'];
    
    // Insert review into database using prepared statement
    $sql = "INSERT INTO `reviews` (`name`, `surname`, `rating`, `comment`) VALUES (?, ?, ?, ?)";
    $stmt = $conn_menu->prepare($sql);
    $stmt->bind_param("ssis", $firstName, $lastName, $rating, $comment);

    if ($stmt->execute()) {
        $response['status'] = 'success';
        $response['message'] = 'Review added successfully';
        // Optionally, you can include the inserted review ID or any other data you might need
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Error adding review: ' . $conn_menu->error;
    }

    $stmt->close();
} else {
    $response['status'] = 'error';
    $response['message'] = 'Invalid request method';
}

$conn_menu->close();

echo json_encode($response);
?>
