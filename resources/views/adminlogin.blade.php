<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="../css/login_styles.css">
</head>
<body>
    <div class="login-container">
        <img src="/images/right.png" alt="logo" width="100px" height="100px" style="display: block; margin: 0 auto 20px auto;">
        <h2>Sign in</h2>
        <form id="loginForm">
            <div class="input-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
            <p id="errorMessage"></p>
        </form>
    </div>
    <script src="/js/login_script.js"></script>
</body>
</html>