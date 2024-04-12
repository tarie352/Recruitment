<?php
// Start the session
session_start();

// Destroy the session
session_destroy();

// Unset specific session variables, if needed
unset($_SESSION['email']);

// Redirect to login view page
header("Location: ../login/Login_view.php");
exit();
