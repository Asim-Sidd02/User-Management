<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
    <div class="form-container">
        <h2>Login</h2>
        <form method="post" action="login_process.php" id="loginForm">
            <div class="form-field">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-field">
                <label for="contact_no">Contact No:</label>
                <input type="text" name="contact" id="contact" required>
            </div>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>
