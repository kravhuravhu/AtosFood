document.addEventListener("DOMContentLoaded", function() {
    // Fetch total revenue, percentage, item count, and out of stock count
    fetch("/RevenueBar/fetch_price.php")
        .then(response => response.json())
        .then(data => {
            // Format the total revenue as a currency
            const totalRevenue = new Intl.NumberFormat('en-ZA', {
                style: 'currency',
                currency: 'ZAR'
            }).format(data.total_revenue);

            const profitIndicator = data.total_revenue >= 0 ? 'text-success' : 'text-danger';
            const profitSymbol = data.total_revenue >= 0 ? 'fas fa-caret-up' : 'fas fa-caret-down';

            document.getElementById('totalRevenue').innerHTML = totalRevenue;
            document.getElementById('revenuePercentage').innerHTML = `<i class="${profitSymbol}"></i> ${data.percentage_of_target.toFixed(2)}%`;

            // Update menu item count
            document.getElementById('menuItemCount').innerHTML = data.total_items;

            // Update out of stock count
            document.getElementById('outOfStockCount').innerHTML = data.out_of_stock;

            // Store total revenue for further use
            window.totalRevenue = data.total_revenue; // Use window to store it globally
        })
        .catch(error => console.error('Error fetching data:', error));

    // Fetch total profit and percentage
    fetch("/RevenueBar/fetch_profit.php")
        .then(response => response.json())
        .then(data => {
            const totalProfit = new Intl.NumberFormat('en-ZA', {
                style: 'currency',
                currency: 'ZAR'
            }).format(data.total_profit);

            const profitIndicator = data.total_profit >= 0 ? 'text-success' : 'text-danger';
            const profitSymbol = data.total_profit >= 0 ? 'fas fa-caret-up' : 'fas fa-caret-down';

            document.getElementById('totalProfit').innerHTML = totalProfit;
            document.getElementById('profitPercentage').innerHTML = `<i class="${profitSymbol}"></i> ${data.percentage_profit.toFixed(2)}%`;
            document.getElementById('profitPercentage').className = `description-percentage ${profitIndicator}`;
            document.getElementById('totalOrdersP').innerHTML = `R ${data.sum}`;

            // Store total orders for further use
            window.totalOrdersP = data.sum; // Use window to store it globally
                // Perform the revenue calculation after fetching all necessary data
                if (window.totalRevenue !== undefined && window.totalOrdersP !== undefined) {
                
                    const doubledRevenue = window.totalRevenue * 2;
                    const percentage = (window.totalOrdersP / doubledRevenue) * 100;
    
                    // Update some element with the new percentage
                    document.getElementById('percentageOfTotalOrders').innerHTML = `<i class="fas fa-caret-up"></i> ${percentage.toFixed(2)}%`;
                }
        })
        .catch(error => console.error('Error fetching profit data:', error));

    // Fetch pending orders, percentage, and total items in order history
    fetch("/RevenueBar/fetch_pending.php")
    .then(response => {
        console.log('Fetch response:', response);
        return response.json();
    })
    .then(data => {
        const pendingOrdersElement = document.getElementById('pendingOrders');
        const pendingPercElement = document.getElementById('pendingPerc');
        const orderHistoryCountElement = document.getElementById('orderHistoryCount');
        const deliveredOrdersElement = document.getElementById('deliveredOrders');
        const deliveredPercElement = document.getElementById('deliveredPerc');

        if (pendingOrdersElement) {
            pendingOrdersElement.innerHTML = data.pending_orders;
        } else {
            console.error('Element with ID "pendingOrders" not found');
        }

        if (pendingPercElement) {
            pendingPercElement.innerHTML = `<i class="fas fa-caret-down"></i> ${data.percentage_pending.toFixed(2)}%`;
        } else {
            console.error('Element with ID "pendingPerc" not found');
        }

        if (orderHistoryCountElement) {
            orderHistoryCountElement.innerHTML = data.total_items;
        } else {
            console.error('Element with ID "orderHistoryCount" not found');
        }

        if (deliveredOrdersElement) {
            deliveredOrdersElement.innerHTML = data.delivery_orders;
        } else {
            console.error('Element with ID "deliveredOrders" not found');
        }

        if (deliveredPercElement) {
            deliveredPercElement.innerHTML = `<i class="fas fa-caret-right"></i> ${data.percentage_delivered.toFixed(2)}%`;
        } else {
            console.error('Element with ID "deliveredPerc" not found');
        }
    })
    .catch(error => console.error('Error fetching data:', error));
});
