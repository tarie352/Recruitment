<?php
error_reporting(E_ALL);

// Start session
session_start();

// Include database connection file
include('../settings/connection.php');

if (isset($_POST['login_v'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    if (!empty($email) && !empty($password)) {
        $sql = "SELECT * FROM People WHERE email = ?";
        $stmt = mysqli_prepare($con, $sql);
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($result)) {
            // Verify password provided against database record using password_verify()
            if (password_verify($password, $row['passwd'])) {
                // Set session variable
                $_SESSION['email'] = $email;

                // Redirect to home/dashboard page
                header("Location: ../view/main.php");
                exit(); // Exit after redirection
            } else {
                // If password verification fails, redirect back to login page with appropriate message
                header("Location: ../view/login.php?msg=incorrect");
                exit(); // Exit after redirection
            }
        } else {
            // If no record found, redirect back to login page with appropriate message
            header("Location: ../view/login.php?msg=notfound");
            exit(); // Exit after redirection
        }
    }
}
