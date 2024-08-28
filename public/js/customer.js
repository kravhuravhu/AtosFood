document.addEventListener('DOMContentLoaded', function() {
    loadCustomers();

    document.querySelector('a[onclick="showPopup(\'Customers\')"]').addEventListener('click', function() {
        loadCustomers();
    });
});

document.getElementById('editCustomerForm').addEventListener('submit', function(event) {
    event.preventDefault();

    let formData = new FormData();
    formData.append('editid', document.getElementById('editid').value);
    formData.append('editname', document.getElementById('editname').value);
    formData.append('editsurname', document.getElementById('editsurname').value);
    formData.append('editemail', document.getElementById('editemail').value);
    formData.append('editpassword', document.getElementById('editpassword').value);

    fetch("../admin/customers/edit_customer.php",
    {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('Item updated successfully!');
            closePopup('editCustomer');
            loadCustomers();
        } else {
            alert('Error updating customer information: ' + data.error);
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

function loadCustomers() {
    fetch("../../LoadMenu/fetch_customers.php")
        .then(response => response.json())
        .then(data => {
            const tableBody = document.getElementById('customers-table').getElementsByTagName('tbody')[0];
            tableBody.innerHTML = '';

            data.forEach(item => {
                const newRow = tableBody.insertRow();
                newRow.innerHTML = `
                    <td>#CUS00${item.id}</td>
                    <td>${item.name}</td>
                    <td>${item.surname}</td>
                    <td>${item.email}</td>
                    <td class="password">${item.password}</td>
                    <td>${item.created_at}</td>
                    <td>
                        <button onclick="editCustomer('${item.id}', '${item.name}', '${item.surname}', '${item.email}', '${item.password}')">Edit</button>
                        <button style="background-color: red" onclick="deleteCustomer('${item.id}')">Delete</button>
                    </td>
                `;
            });   
        })
        .catch(error => console.error('Error:', error));
}

function editCustomer(id, name, surname, email, password) {
    document.getElementById('editid').value = id;
    document.getElementById('editname').value = name;
    document.getElementById('editsurname').value = surname;
    document.getElementById('editemail').value = email;
    document.getElementById('editpassword').value = password;
    showPopup('editCustomer');
}

function deleteCustomer(id) {
    if (!confirm('Are you sure you want to delete this item?')) {
        return;
    }                        
 
    fetch("../../admin/customers/delete_customer.php", {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `id=${id}`
    })
    .then(response => response.json())
    .then(data => {
        console.log(data);
        if (data.success) {
            alert('Item deleted successfully!');
            loadCustomers();
        } else {
            alert('Error deleting item: ' + data.error);
        }
    })
    .catch(error => console.error('Error:', error));
}