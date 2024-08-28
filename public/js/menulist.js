document.addEventListener('DOMContentLoaded', function() {
    loadItems();

    document.querySelector('a[onclick="showPopup(\'menuItems\')"]').addEventListener('click', function() {
        loadItems();
    });
});

document.getElementById('itemForm').addEventListener('submit', function(event) {
    event.preventDefault();

    let formData = new FormData();
    formData.append('itemName', document.getElementById('itemName').value);
    formData.append('itemDescription', document.getElementById('itemDescription').value);
    formData.append('itemSpecs', document.getElementById('itemSpecs').value);
    formData.append('itemStock', document.getElementById('itemStock').value);
    formData.append('itemPrice', document.getElementById('itemPrice').value);
    formData.append('itemCategory', document.getElementById('itemCategory').value);
    formData.append('itemImage', document.getElementById('itemImage').files[0]);
    
    fetch("../../admin/menuTable/add_item.php",
    {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('Item added successfully!');
            document.getElementById('itemForm').reset();
            loadItems();
        } else {
            alert('Error adding item: ' + data.error);
        }
    })
    .catch(error => console.error('Error:', error));
});

document.getElementById('editForm').addEventListener('submit', function(event) {
    event.preventDefault();

    let formData = new FormData();
    formData.append('editItemId', document.getElementById('editItemId').value);
    formData.append('editItemName', document.getElementById('editItemName').value);
    formData.append('editItemDescription', document.getElementById('editItemDescription').value);
    formData.append('editItemSpecs', document.getElementById('editItemSpecs').value);
    formData.append('editItemStock', document.getElementById('editItemStock').value);
    formData.append('editItemPrice', document.getElementById('editItemPrice').value);
    formData.append('editItemCategory', document.getElementById('editItemCategory').value);
    if (document.getElementById('editItemImage').files.length > 0) {
        formData.append('editItemImage', document.getElementById('editItemImage').files[0]);
    }

    fetch("../../admin/menuTable/edit_item.php",
    {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('Item updated successfully!');
            closePopup('editItemForm');
            loadItems();
        } else {
            alert('Error updating item: ' + data.error);
        }
    })
    .catch(error => console.error('Error:', error));
});

function showPopup(id) {
    document.getElementById(id).style.display = 'flex';
}

function closePopup(id) {
    document.getElementById(id).style.display = 'none';
}

function showAddItemForm() {
    document.getElementById('addItemForm').style.display = 'block';
}

function loadItems() {
    fetch("../../LoadMenu/fetch_menu.php")
        .then(response => response.json())
        .then(data => {
            const tableBody = document.getElementById('itemsTable').getElementsByTagName('tbody')[0];
            tableBody.innerHTML = '';

            data.forEach(item => {
                const newRow = tableBody.insertRow();
                if (item.itemStock <= 0) {
                    var stockCount = "Out Of Stock";
                } else {
                    stockCount = item.itemStock;
                }
                newRow.innerHTML = `
                    <td>${item.itemID}</td>
                    <td>${item.itemName}</td>
                    <td>${item.itemDescription}</td>
                    <td>${item.itemSpecs.replace(/;|\•/g, '<br>')}</td>
                    <td>${stockCount}</td>
                    <td>R${item.itemPrice}</td>
                    <td>${item.itemCategory}</td> 
                    <td><img src="${item.itemImage}" alt="${item.itemName}" width="50"></td>
                    <td>
                        <button onclick="editItem('${item.itemID}', '${item.itemName}', '${item.itemDescription}', '${item.itemSpecs}', '${item.itemStock}', '${item.itemPrice}', '${item.itemCategory}', '${item.itemImage}')">Edit</button>
                        <button style="background-color: red" onclick="deleteItem('${item.itemID}', '${item.itemCategory}')">Delete</button>
                    </td>
                `;
            });   
        })
        .catch(error => console.error('Error:', error));
}

function editItem(itemId, itemName, itemDescription, itemSpecs, itemStock, itemPrice, itemCategory, itemImage) {
    document.getElementById('editItemId').value = itemId;
    document.getElementById('editItemName').value = itemName;
    document.getElementById('editItemDescription').value = itemDescription;
    document.getElementById('editItemSpecs').value = itemSpecs;
    document.getElementById('editItemStock').value = itemStock;
    document.getElementById('editItemPrice').value = itemPrice;
    document.getElementById('editItemCategory').value = itemCategory;
    
    // Check if there is an existing image
    if (itemImage) {
        document.getElementById('editItemImage').value = ''; // Clear file input (optional)
        const imagePreview = document.getElementById('editItemCurrentImage');
        imagePreview.src = itemImage; // Set the src attribute of an <img> tag to display the current image
    }

    showPopup('editItemForm');
}

function deleteItem(itemId, itemCategory) {
    if (!confirm('Are you sure you want to delete this item?')) {
        return;
    }
 
    fetch("../../admin/menuTable/delete_item.php", {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `itemId=${itemId}&itemCategory=${itemCategory}`
    })
    .then(response => response.json())
    .then(data => {
        console.log(data);
        if (data.success) {
            alert('Item deleted successfully!');
            loadItems();
        } else {
            alert('Error deleting item: ' + data.error);
        }
    })
    .catch(error => console.error('Error:', error));
}