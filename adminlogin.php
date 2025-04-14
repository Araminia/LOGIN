<?php
session_start();
$message = '';

// Enable error reporting for debugging (optional, remove in production)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Check if the login form has been submitted via POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve and sanitize user input
    $username = trim($_POST["username"] ?? '');
    $password = trim($_POST["password"] ?? '');

    // Dummy credentials for example purposes
    $validUsername = "example";
    $validPassword = "password123";

    // Validate credentials
    if ($username === $validUsername && $password === $validPassword) {
        // Store login status in session
        $_SESSION["logged_in"] = true;
        $message = "Login successful! Welcome, " . htmlspecialchars($username) . ".";
        // Redirect to another page if desired (uncomment the lines below)
        // header("Location: dashboard.php");
        // exit();
    } else {
        $message = "Invalid username or password.";
    }
}
?>