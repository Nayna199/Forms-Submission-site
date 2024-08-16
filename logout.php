<?php
// Start the session
session_start();

// Clear all session variables
$_SESSION = array();

// Check if cookies are used for sessions
if (ini_get("session.use_cookies")) {
    // Get session cookie parameters
    $params = session_get_cookie_params();

    // Expire the session cookie
    setcookie(
        session_name(),
        '', // empty value
        time() - 42000, // set to a time in the past
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}

// Destroy the session
session_destroy();

// Redirect to index.php
header("Location: index.php");
exit(); // It's a good practice to include exit() after header() to prevent further execution
?>
