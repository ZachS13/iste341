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
    // Can see all of the bugs present on all of the projects
    // Can edit all of the bugs
    echo "Welcome, Admin!";
} elseif ($userRole == 'manager') {
    // Page for the Manager
    // Can see all of the bugs on all of the projects
    // Can edit all of the bugs
    echo "Welcome, Manager!";
} else {
    // Page for the User
    // Can only see the bugs on users assigned project
    // Can only edit the bugs that the user is assigned to
    echo "Welcome, User!";
}
?>
