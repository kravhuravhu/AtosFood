document.addEventListener("DOMContentLoaded", function() {
    const historyTableBody = document.getElementById('historyTableBody');
  
    fetch('/LoadMenu/fetch_history.php')
        .then(response => response.json())
        .then(data => {
            data.order_history.forEach(order => {
                const itemNames = order.ordItemname.split('|').map(item => item.split(';')[0]).join(', ');
  
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td><a href="#" class="order-link" data-orderid="${order.orderID}">${order.orderID}</a></td>
                    <td>${order.ordCusname}</td>
                    <td>${itemNames}</td>
                    <td>
                        <span class="badge badge-${order.ordStatus.toLowerCase()}">${order.ordStatus}</span>
                    </td>
                    <td>${order.ordDate}</td>
                    <td>${order.ordTime}</td>
                `;
                historyTableBody.appendChild(row);
            });
  
            // Add click event listeners to order ID links
            const orderLinks = document.querySelectorAll('.order-link');
            orderLinks.forEach(link => {
                link.addEventListener('click', function(event) {
                    event.preventDefault();
                    const orderId = this.getAttribute('data-orderid');
                    const selectedOrder = data.order_history.find(order => order.orderID === orderId);
                    displayOrderPopup(selectedOrder);
                });
            });
  
            // Add click event listeners to order status spans
            const statusSpans = document.querySelectorAll('.badge');
            statusSpans.forEach(span => {
                span.addEventListener('click', function() {
                    const orderId = this.closest('tr').querySelector('.order-link').getAttribute('data-orderid');
                    const currentStatus = this.textContent;
                    showStatusDropdown(this, orderId, currentStatus);
                });
            });
        })
        .catch(error => console.error('Error fetching order history:', error));
});

function showStatusDropdown(span, orderId, currentStatus) {
    const dropdown = document.createElement('select');
    const statuses = ['Processing', 'Delivered', 'Cancelled'];
    statuses.forEach(status => {
        const option = document.createElement('option');
        option.value = status;
        option.textContent = status;
        if (status === currentStatus) {
            option.selected = true;
        }
        dropdown.appendChild(option);
    });
    
    dropdown.addEventListener('change', function() {
        const newStatus = this.value;
        span.className = `badge badge-${newStatus.toLowerCase()}`;
        span.textContent = newStatus;
        updateOrderStatus(orderId, newStatus);
        span.replaceWith(dropdown); // Replace dropdown with the updated span
    });

    span.replaceWith(dropdown);
    dropdown.focus();

    // Restore the original span if dropdown loses focus without change
    dropdown.addEventListener('blur', function() {
        dropdown.replaceWith(span);
    });
}

function updateOrderStatus(orderId, newStatus) {
    fetch('/LoadMenu/order_status.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ orderId: orderId, newStatus: newStatus })
    })
    .then(response => response.json())
    .then(data => {
        if (data.message === 'success') {
            console.log('Order status updated successfully');
        } else {
            console.error('Error updating order status:', data.message);
        }
    })
    .catch(error => console.error('Error updating order status:', error));
}

function displayOrderPopup(order) {
    const modalTitle = document.getElementById('orderModalLabel');
    const modalAddress = document.getElementById('ord_address');
    const modalBody = document.querySelector('#orderModal .modal-body #ordHistoryItems');
    const totalAmountSpan = document.getElementById('totalAmount');
  
    // Update modal title with Order ID and Customer Name
    modalTitle.textContent = `Order: ${order.orderID} | Recipient: ${order.ordCusname}`;

    // Update modal address
    modalAddress.textContent = `Office Address: ${order.ordDeliveryadress}`;
  
    // Split the order items into rows and calculate the total amount
    let totalAmount = 0;
    const items = order.ordItemname.split('|').map(item => {
        const [name, quantity, price, category] = item.split(';');
        const totalPrice = (price * quantity).toFixed(2);
        totalAmount += parseFloat(totalPrice);
        return `<tr>
                    <td>${name}</td>
                    <td>${quantity}</td>
                    <td>${price}</td>
                    <td>${category}</td>
                    <td>${totalPrice}</td>
                </tr>`;
    }).join('');
  
    // Insert items into the modal body
    modalBody.innerHTML = items;
  
    // Update total amount
    totalAmountSpan.textContent = totalAmount.toFixed(2);
  
    // Show the modal (using Bootstrap modal functionality)
    $('#orderModal').modal('show');
}
