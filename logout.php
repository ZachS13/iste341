<?php

function logout() {
  // Unset all of the session vars and destroy the session
  $_SESSION = array();
  session_destroy();

  // Redirect back to the login page
  header("Location: login.php");
  exit();
}

?>
