<?php
include 'restart';
session_start(); // Start the session
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session

// Redirect to the desired page after logout
header("Location: login.php");
exit();
?>
