// show available admins onload
document.addEventListener('DOMContentLoaded', function() {
    fetchStaffData();
    // Set today's date as activeSince
    document.getElementById('adminActiveSince').value = getCurrentDate();
});

// function to get current date in YYYY-MM-DD format
function getCurrentDate() {
    const today = new Date();
    const year = today.getFullYear();
    const month = String(today.getMonth() + 1).padStart(2, '0');
    const day = String(today.getDate()).padStart(2, '0');

    return `${year}-${month}-${day}`;
}

// take from user, send db
document.getElementById('adminForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    const firstName = document.getElementById('adminFirst').value;
    const lastName = document.getElementById('adminLast').value;
    const email = document.getElementById('adminEmail').value;
    const phone = document.getElementById('adminPhone').value;
    const pass = document.getElementById('adminPass').value;
    const passc = document.getElementById('adminPassc').value;

    if (pass != passc) {
        alert("Password does not match");
    } else {
        const activeSince = getCurrentDate();

        const userID = generateUserID(firstName, lastName, activeSince);

        const formData = new FormData();
        formData.append('adminFirst', firstName);
        formData.append('adminLast', lastName);
        formData.append('adminEmail', email);
        formData.append('adminPassc', passc);
        formData.append('adminPhone', phone);
        formData.append('adminActiveSince', activeSince);
        formData.append('adminUserID', userID);

        fetch('add_staff.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            console.log(data);
            document.getElementById('adminForm').reset();
            fetchStaffData();
            document.getElementById('adminActiveSince').value = getCurrentDate();
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }
});

// user id generator
function generateUserID(firstName, lastName, activeSince) {
    const firstLetterFirstName = firstName.charAt(0).toUpperCase();
    const firstLetterLastName = lastName.charAt(0).toUpperCase();
    const date = new Date(activeSince);
    
    const year = date.getFullYear().toString().slice(-2);
    const month = ("0" + (date.getMonth() + 1)).slice(-2);
    const day = ("0" + date.getDate()).slice(-2);

    return firstLetterFirstName + firstLetterLastName + year + month + day;
}

// fetch info from db
function fetchStaffData() {
    fetch('get_staff.php')
    .then(response => response.json())
    .then(data => {
        const tableBody = document.getElementById('adminTable').getElementsByTagName('tbody')[0];
        tableBody.innerHTML = '';

        data.forEach(admin => {
            addAdminToTable(admin.userID, admin.firstName, admin.lastName, admin.email, admin.password, admin.phone, admin.activeSince);
        });
    })
    .catch(error => {
        console.error('Error:', error);
    });
}

function addAdminToTable(userID, firstName, lastName, email, pass, phone, activeSince) {
    const table = document.getElementById('adminTable').getElementsByTagName('tbody')[0];
    const newRow = table.insertRow();

    const userIDCell = newRow.insertCell(0);
    const firstNameCell = newRow.insertCell(1);
    const lastNameCell = newRow.insertCell(2);
    const emailCell = newRow.insertCell(3);
    const passCell = newRow.insertCell(4)
    const phoneCell = newRow.insertCell(5);
    const activeSinceCell = newRow.insertCell(6);
    const actionCell = newRow.insertCell(7);

    userIDCell.textContent = userID;
    firstNameCell.textContent = firstName;
    lastNameCell.textContent = lastName;
    emailCell.textContent = email;
    passCell.textContent = pass;
    phoneCell.textContent = phone;
    activeSinceCell.textContent = activeSince;

    const editButton = document.createElement('button');
    editButton.textContent = 'Edit';
    editButton.classList.add('edit-btn');
    editButton.addEventListener('click', function() {
        editAdmin(newRow);
    });

    const deleteButton = document.createElement('button');
    deleteButton.textContent = 'Delete';
    deleteButton.classList.add('action-btn');
    deleteButton.addEventListener('click', function() {    
        if (confirm('Are you sure want to delete this admin?')) {
            deleteAdmin(userID, newRow);
        }
    });
    
    actionCell.appendChild(editButton);
    actionCell.appendChild(deleteButton);
}

function editAdmin(row) {
    const userIDCell = row.cells[0];
    const firstNameCell = row.cells[1];
    const lastNameCell = row.cells[2];
    const emailCell = row.cells[3];
    const passCell = row.cells[4];
    const phoneCell = row.cells[5];
    const activeSinceCell = row.cells[6];

    const currentUserID = userIDCell.textContent;
    const currentFirstname = firstNameCell.textContent;
    const currentLastname = lastNameCell.textContent;
    const currentEmail = emailCell.textContent;
    const currentPass = passCell.textContent;
    const currentPhone = phoneCell.textContent;
    const currentActiveSince = activeSinceCell.textContent;

    userIDCell.innerHTML = `<input type='text' value='${currentUserID}' disabled>`;
    firstNameCell.innerHTML = `<input type='text' value='${currentFirstname}'>`;
    lastNameCell.innerHTML = `<input type='text' value='${currentLastname}'>`;
    emailCell.innerHTML = `<input type='email' value='${currentEmail}'>`;
    passCell.innerHTML = `<input type='password' value='${currentPass}'>`;
    phoneCell.innerHTML = `<input type='tel' pattern="[0-9]{10}" value='${currentPhone}'>`;
    activeSinceCell.innerHTML = `<input type='date' value='${currentActiveSince}' disabled>`;

    const saveButton = document.createElement('button');
    saveButton.textContent = 'Save';
    saveButton.classList.add('edit-btn');
    saveButton.addEventListener('click', function() {
        saveAdmin(row);
    });

    const actionCell = row.cells[7];
    actionCell.innerHTML = '';
    actionCell.appendChild(saveButton);
}

// delete staff
function deleteAdmin(userID, row) {
    const formData = new FormData();
    formData.append('adminUserID', userID);

    fetch('delete_staff.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        console.log(data);
        row.parentElement.removeChild(row);
    })
    .catch(error => {
        console.error('Error:', error);
    });
}

// save edited to db
function saveAdmin(row) {
    const userIDCell = row.cells[0];
    const firstNameCell = row.cells[1];
    const lastNameCell = row.cells[2];
    const emailCell = row.cells[3];
    const passCell = row.cells[4];
    const phoneCell = row.cells[5];
    const activeSinceCell = row.cells[6];

    const newUserID = userIDCell.querySelector('input').value;
    const newFirstname = firstNameCell.querySelector('input').value;
    const newLastname = lastNameCell.querySelector('input').value;
    const newEmail = emailCell.querySelector('input').value;
    const newPass = passCell.querySelector('input').value;
    const newPhone = phoneCell.querySelector('input').value;
    const newActiveSince = activeSinceCell.querySelector('input').value;

    const formData = new FormData();
    formData.append('adminUserID', newUserID);
    formData.append('adminFirst', newFirstname);
    formData.append('adminLast', newLastname);
    formData.append('adminEmail', newEmail);
    formData.append('adminPassc', newPass);
    formData.append('adminPhone', newPhone);
    formData.append('adminActiveSince', newActiveSince);

    // fetch data to edit
    fetch('edit_staff.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        userIDCell.textContent = newUserID;
        firstNameCell.textContent = newFirstname;
        lastNameCell.textContent = newLastname;
        emailCell.textContent = newEmail;
        passCell.textContent = newPass;
        phoneCell.textContent = newPhone;
        activeSinceCell.textContent = newActiveSince;

        const editButton = document.createElement('button');
        editButton.textContent = 'Edit';
        editButton.classList.add('edit-btn');
        editButton.addEventListener('click', function() {
            editAdmin(row);
        });

        const deleteButton = document.createElement('button');
        deleteButton.textContent = 'Delete';
        deleteButton.classList.add('action-btn');
        /*deleteButton.addEventListener('click', function() {
            row.parentElement.deleteRow(row.rowIndex - 1);
            console.log("Delete", data);
        });*/
        deleteButton.addEventListener('click', function() {    
            if (confirm('Are you sure want to delete this admin?')) {
                deleteAdmin(newUserID, row);
            }
        });

        const actionCell = row.cells[7];
        actionCell.innerHTML = '';
        actionCell.appendChild(editButton);
        actionCell.appendChild(deleteButton);
    })
    .catch(error => {
        console.error('Error:', error);
    });
}
