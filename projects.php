<?php
// has the user logged in already
if (!isset($_SESSION['username'])) {
    // back to the login page
    header("Location; login.php");
    exit();
}

// get the role of the user
$userRole = $_SESSION['role'];

// is the user an admin
if ($userRole == 'admin') {
    // PAGE FOR THE ADMIN
    // something to add a new user
    // something to delete a user
    // viewing all of the current projects
}
// is the user a manager
if ($userRole == 'manager') {
    // PAGE FOR THE MANAGER
    // viewing all of the current projects
}
// is it just a regular user
else {
    // PAGE FOR THE USER
    // viewing all of the projects they are assigned to (should only be one)
    // on the press of the project they should be able to view the bug page for the project
    // 
}
?>