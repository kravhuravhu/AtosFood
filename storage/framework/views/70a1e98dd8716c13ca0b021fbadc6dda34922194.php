<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Thank You for Your Order</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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
    <div class="actions">
        <!-- Additional actions if needed -->
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    history.pushState(null, null, location.href='#');
    window.onpopstate = function () {
        history.go(1);
    };
 
    // Retrieve order details from PHP session
    <?php
      session_start();
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
    } else {
        console.error('Order details not found in session.');
    }
});
</script>


</body>
</html>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\Wednesday\resources\views/completed.blade.php ENDPATH**/ ?>