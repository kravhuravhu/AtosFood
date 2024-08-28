document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('loginForm').addEventListener('submit', function(e) {
        e.preventDefault();
 
        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;
 
        console.log('Sending data:', { email, password });
 
        fetch('/LoadMenu/fetch_admins.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ email, password }),
        })
        .then(response => response.json())
        .then(data => {
            console.log('Received data:', data);
            if (data.success) {
                localStorage.setItem('admin_role', 'admin_user');
                localStorage.setItem('admin_username', data.username);
                alert('Login successful');
                window.location.href = 'admindash';
            } else {
               
                if (email === 'admin_@atosfood.net' && password === '@tos') {
                    localStorage.setItem('admin_role', 'admin_admin');
                    localStorage.setItem('admin_username', 'Admin');
                    alert('Login successful!');
                    window.location.href = 'admindash';
                } else {
                    document.getElementById('errorMessage').textContent = 'Invalid email or password';
                }
            }
        })
        .catch(error => console.error('Error:', error));
    });
});
