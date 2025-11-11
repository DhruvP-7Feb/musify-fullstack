<?php
// login.php

// --- START SESSION ---
// We start a session to potentially store error messages, though for this simple version, we'll use a URL parameter.
session_start();

// --- DEFINE YOUR STATIC CREDENTIALS ---
// You can change 'admin' and 'password' to whatever you want.
$CORRECT_USERNAME = 'admin';
$CORRECT_PASSWORD = 'password';

// --- YOUR HOMEPAGE ---
// This is the page users are sent to after a successful login.
$HOMEPAGE_URL = 'index.html';

// --- YOUR LOGIN PAGE ---
// This is where users are sent back to if login fails.
$LOGIN_PAGE_URL = 'login.html';

// --- SCRIPT LOGIC ---

// Check if the form was submitted using the POST method.
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if both username and password fields were filled out.
    if (isset($_POST['username']) && isset($_POST['password'])) {
        
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Check if the submitted username and password match your defined credentials.
        if ($username === $CORRECT_USERNAME && $password === $CORRECT_PASSWORD) {
            
            // --- SUCCESS ---
            // The credentials match.
            // We can set a session variable to remember the user (optional but good practice).
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            
            // Redirect the user to the homepage.
            header("Location: " . $HOMEPAGE_URL);
            exit; // Always call exit() after a header redirect.

        } else {
            // --- FAILURE (Wrong Credentials) ---
            // The credentials do not match.
            // Redirect back to the login page with an error flag in the URL.
            header("Location: " . $LOGIN_PAGE_URL . "?error=1");
            exit;
        }

    } else {
        // --- FAILURE (Empty Fields) ---
        // One or both fields were empty.
        // Redirect back to the login page with an error flag.
        header("Location: " . $LOGIN_PAGE_URL . "?error=1");
        exit;
    }

} else {
    // --- NOT A POST REQUEST ---
    // Someone accessed this file directly without submitting the form.
    // Just send them to the login page.
    header("Location: " . $LOGIN_PAGE_URL);
    exit;
}
?>