// Function to fetch recent items and display them
function fetchRecentItems() {
    fetch('/LoadMenu/fetch_recent.php')
        .then(response => response.json())
        .then(data => {
            // Assuming there's a <div> with id="recentItems" where items will be displayed
            const recentItemsContainer = document.getElementById('recentItems');
            // Clear previous content
            recentItemsContainer.innerHTML = '';
            // Initialize HTML string
            let html = '';
            // Iterate through fetched items and create HTML elements
            data.forEach(item => {
                // Append HTML for each item
                html += `
                    <li class="item">
                        <div class="product-img">
                            <img src="${item.itemImage}" alt="${item.itemName}" class="img-size-50">
                        </div>
                        <div class="product-info">
                            <a href="javascript:void(0)" class="product-title">
                                ${item.itemName} <span class="badge badge-danger float-right">
                                R${item.itemPrice}</span>
                            </a>
                            <span class="product-description">${item.itemCategory}</span>
                        </div>
                    </li>
                `;
            });
            // Set innerHTML of recentItemsContainer
            recentItemsContainer.innerHTML = html;
        })
        .catch(error => {
            console.error('Error fetching recent items:', error);
        });
}

// Call fetchRecentItems when the page loads or when needed
document.addEventListener('DOMContentLoaded', fetchRecentItems);
