<?php
session_start();

// Store the referring page for redirect
$referrer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.php';

// Clear all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Set a logout success message
session_start();
$_SESSION['logout_success'] = true;

// Redirect back to the referring page
header("Location: " . $referrer);
exit();
?> 