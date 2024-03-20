<?php
session_start();

// Get the username and password
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Connection to the database -- Adminer
    $conn = new mysqli("localhost", "username", "password", "database_name");

    // Statement to get the id, password, and role from the user table
    $sql = "SELECT id, password, role FROM users WHERE username = ?";

    // Prepare the statement and get the result
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    // Get the user information
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $hashed_password = $row['password'];
        $user_role = $row['role'];

        // Check if the passwords match
        if (password_verify($password, $hashed_password)) {
            // Create the session with the username and the role
            $_SESSION['username'] = $username;
            $_SESSION['role'] = $user_role;
            
            // Redirect to the projects page 
            header("Location: projects.php");
            exit();
        } else {
            $error = "Invalid username or password.";
        }
    } else {
        // User not found
        $error = "Invalid username or password.";
    }
    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
