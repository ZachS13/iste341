<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // Back to the login page
    header("Location: login.php");
    exit();
}

// Get the user role
$userRole = $_SESSION['role'];

// Change the what's on the page depending on the user
if ($userRole == 'admin') {
    // Page for the Admin
    // Display something to add a new user
    // Display something to delete a user
    // Display all current projects
    echo "Welcome, Admin!";
} elseif ($userRole == 'manager') {
    // Page for the Manager
    // Display all current projects
    echo "Welcome, Manager!";
} else {
    // Page for the User
    // Display all projects the user is assigned to (should only be one)
    // On click of a project, allow viewing the bug page for the project
    echo "Welcome, User!";
}
?>
