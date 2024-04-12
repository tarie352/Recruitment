<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

// Function to check if user is logged in
function checkLogin()
{
    if (!isset($_SESSION['email'])) {
        // Redirect unauthorized users to the login page
        header("Location: login.php");
        exit();
    }
}

// Validation function to check if user is logged in based on email
function validateEmail($email)
{
    if (!isset($_SESSION['email']) || $_SESSION['email'] !== $email) {
        // Redirect unauthorized users to the login page
        header("Location: login.php");
        exit();
    }
}
