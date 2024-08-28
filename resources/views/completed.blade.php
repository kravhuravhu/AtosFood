<?php
    require_once 'LoadMenu/confirm_order.php';

    // Start session and retrieve order details
    session_start();
    $orderID = isset($_SESSION['orderID']) ? $_SESSION['orderID'] : '';
    $customerName = isset($_SESSION['customerName']) ? $_SESSION['customerName'] : '';
    $customerEmail = isset($_SESSION['customerEmail']) ? $_SESSION['customerEmail'] : '';
    $cartItems = isset($_SESSION['cartItems']) ? $_SESSION['cartItems'] : [];
    $totalPrice = isset($_SESSION['totalPrice']) ? $_SESSION['totalPrice'] : 0.00;

    // Send email and get the message
    $message = sendOrderConfirmation($orderID, $customerName, $customerEmail, $cartItems, $totalPrice);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Your Order</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <x-app-layout>
        <div class="thank-you-container">
            <h1>Thank You for Your Order!</h1>
            <p class="order-message">Your order has been received and is now being processed.</p>
            <p class="business-message">We appreciate your business!</p>
            <div class="order-details">
                <p><strong>Order Number:</strong> <span id="orderNumber"></span></p>
                <p><strong>Date:</strong> <span id="orderDate"></span></p>
                <p><strong>Shipping Address:</strong> <span id="shippingAddress"></span></p>
            </div>
            <p class="shipping-message">We will notify you once your order is ready to be delivered.</p>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                history.pushState(null, null, location.href='#');
                window.onpopstate = function () {
                    history.go(1);
                };

                // Retrieve order details from PHP session
                <?php
                    $orderID = isset($_SESSION['orderID']) ? $_SESSION['orderID'] : '';
                    $customerName = isset($_SESSION['customerName']) ? $_SESSION['customerName'] : '';
                    $customerAddress = isset($_SESSION['customerAddress']) ? $_SESSION['customerAddress'] : '';
                ?>

                // Display order details if available
                if (<?php echo !empty($orderID) && !empty($customerName) && !empty($customerAddress) ? 'true' : 'false' ?>) {
                    // Store order details in sessionStorage
                    sessionStorage.setItem('orderID', '#<?php echo $orderID; ?>');
                    sessionStorage.setItem('customerName', '<?php echo $customerName; ?>');
                    sessionStorage.setItem('customerAddress', '<?php echo $customerAddress; ?>');
                    
                    // Display order details
                    document.getElementById('orderNumber').textContent = '<?php echo $orderID; ?>';

                    // Get current date
                    const currentDate = new Date();

                    const monthNames = ["January", "February", "March", "April", "May", "June",
                        "July", "August", "September", "October", "November", "December"];
                    const month = monthNames[currentDate.getMonth()];
                    const year = currentDate.getFullYear();
                    const day = currentDate.getDate();

                    const formattedDate = `${day} ${month}, ${year}`;
                    document.getElementById('orderDate').textContent = formattedDate;

                    document.getElementById('shippingAddress').textContent = 'Siemens, <?php echo $customerAddress; ?>';

                    // Clear storage
                    ['cartItems', 'orderID', 'customerName', 'customerEmail', 'customerAddress'].forEach(item => localStorage.removeItem(item));

                } else {
                    console.error('Order details not found in session.');
                }
            });
        </script>
    </x-app-layout>
</body>
</html>
