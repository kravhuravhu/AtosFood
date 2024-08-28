<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Summary</title>
    <script>src="main.js"</script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Cart Summary</h2>
    <table id="summaryTable">
        <thead>
            <tr>
                <th>Item Name</th>
                <th>Quantity</th>
                <th>Unit Price</th>
                <th>Total Price</th>
            </tr>
        </thead>
        <tbody>
            <!-- Cart items will be dynamically added here -->
        </tbody>
    </table>
    <div class="cart-total">
        Total Amount: R<span id="totalAmount">0.00</span>
    </div>

    
</body>
</html>
