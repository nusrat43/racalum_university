<?php
session_start(); // Start the session
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session

echo "<script> alert('You have Loged Out successfully!'); window.location='../edit_login.php'; </script>";
// Redirect to the login page
exit();
?>