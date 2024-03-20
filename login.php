<?php
session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve username and password from form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the username and password are correct and in the database
    $valid_username = 'user';
    $valid_password = 'password';

    // Check if username and password are correct
    if ($username === $valid_username && $password === $valid_password) {
        // Authentication successful
        // Set session variables
        $_SESSION['username'] = $username;

        // Redirect to the dashboard or any other page
        header("Location: projects.php");
        exit();
    } else {
        // Authentication failed
        $error = "Invalid username or password.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="login.php">
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <input type="submit" value="Login">
        </div>
    </form>
</body>
</html>
