<?php
error_reporting(E_ALL);

// Include the database connection file
include('../settings/connection.php');


// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Retrieve form data
    $first_name = mysqli_real_escape_string($con, $_POST['firstName']);
    $last_name = mysqli_real_escape_string($con, $_POST['lastName']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $companyName = mysqli_real_escape_string($con, $_POST['companyName']);
    $recruiterCode = mysqli_real_escape_string($con, $_POST['recruiterCode']);
    $industry = mysqli_real_escape_string($con, $_POST['industry']);
    $phone_number = intval($_POST['phoneNumber']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    echo "succe000000SSSSSSS0033443ss";

    // Hash the password
    $hash_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare the SQL statement
    $insert_query = "INSERT INTO People (fname, lname, email, company, recruiter_code, industry, phone, username, passwd)
       VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Prepare and bind parameters
    $stmt = $con->prepare($insert_query);
    $stmt->bind_param("ssssissis", $first_name, $last_name, $email, $companyName, $recruiterCode, $industry, $phone_number, $username, $hash_password);
    // // echo "working";


    // Execute the statement
    if ($stmt->execute()) {
        header("Location: ../view/login.php");
        exit();
    } else {
        // If an error occurs, let's output the error message
        // header("Location: ../view/interviews.php");
        echo "Error: " . $stmt->error;
        exit();
    }
}
