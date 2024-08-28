<?php
header('Content-Type: application/json');

// Database configuration
$host = 'localhost'; 
$dbname = 'staff';
$username = 'juniorra';
$password = 'arrithnius';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo json_encode(array('message' => 'Database connection error: ' . $e->getMessage()));
    exit;
}

// Decode cart items
$cartItems = isset($_POST['cartItems']) ? json_decode($_POST['cartItems'], true) : [];
$customerName = isset($_POST['name']) ? $_POST['name'] : '';
$customerEmail = isset($_POST['email']) ? $_POST['email'] : '';
$deliveryAddress = isset($_POST['selectedOptions']) ? $_POST['selectedOptions'] : '';
$phoneNumber = isset($_POST['phone']) ? $_POST['phone'] : '';
$paymentMethod = isset($_POST['payment']) ? $_POST['payment'] : '';

// Create a string to store all cart items
$cartItemsString = '';
$totalPrice = 0; 

foreach ($cartItems as $item) {
    $itemTotalPrice = $item['price'] * $item['quantity'];
    $totalPrice += $itemTotalPrice;
    $cartItemsString .= implode(';', [
        $item['name'],
        $item['quantity'],
        $item['price'],
        $item['category']
    ]) . '|';
}

// Remove the trailing '|'
$cartItemsString = rtrim($cartItemsString, '|');

try {
    $pdo->beginTransaction();

    // Insert into the database
    $sql = "INSERT INTO order_history 
            (ordItemname, ordTotalprice, ordCusname, ordEmail, ordDeliveryadress, ordPhonenumber, ordPaymentmethod, ordStatus, ordDate, ordTime) 
            VALUES 
            (:cartItemsString, :totalPrice, :customerName, :customerEmail, :deliveryAddress, :phoneNumber, :paymentMethod, 'Processing', NOW(), NOW())";
    
    $stmt = $pdo->prepare($sql);

    // Bind parameters
    $stmt->bindParam(':cartItemsString', $cartItemsString);
    $stmt->bindParam(':totalPrice', $totalPrice);
    $stmt->bindParam(':customerName', $customerName);
    $stmt->bindParam(':customerEmail', $customerEmail);
    $stmt->bindParam(':deliveryAddress', $deliveryAddress);
    $stmt->bindParam(':phoneNumber', $phoneNumber);
    $stmt->bindParam(':paymentMethod', $paymentMethod);

    $stmt->execute();

    // Retrieve the latest order
    //$sqlLatestOrder = "SELECT * FROM order_history ORDER BY orderID ASC LIMIT 1";
    $sqlLatestOrder = "SELECT * FROM order_history ORDER BY ordDate DESC, ordTime DESC, orderID DESC LIMIT 1";

    $stmtLatestOrder = $pdo->query($sqlLatestOrder);
    $latestOrder = $stmtLatestOrder->fetch(PDO::FETCH_ASSOC);

    $pdo->commit();

    // Store order details in session
    session_start();
    $_SESSION['orderID'] = $latestOrder['orderID'];
    $_SESSION['customerName'] = $latestOrder['ordCusname'];
    $_SESSION['customerEmail'] = $latestOrder['ordEmail'];
    $_SESSION['customerAddress'] = $latestOrder['ordDeliveryadress'];
    $_SESSION['cartItems'] = $cartItems;
    $_SESSION['totalPrice'] = $totalPrice;

    // Return success response
    echo json_encode(array(
        'message' => 'success',
        'orderID' => $latestOrder['orderID'],
        'customerName' => $latestOrder['ordCusname'],
        'customerEmail' => $latestOrder['ordEmail'],
        'customerAddress' => $latestOrder['ordDeliveryadress'],
        'cartItems' => $cartItems
    ));

} catch (PDOException $e) {
    $pdo->rollBack();
    echo json_encode(array('message' => 'Database error: ' . $e->getMessage()));
}

?>
