<?php
// Include the database connection file
include('../settings/connection.php');

// Check if the form is submitted
if (isset($_POST['candidate_submit'])) {
    // Retrieve form data and sanitize it
    $candidateName = mysqli_real_escape_string($con, $_POST['candidateID']);
    $firstName = mysqli_real_escape_string($con, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($con, $_POST['lastName']);
    $phoneNumber = mysqli_real_escape_string($con, $_POST['phoneNumber']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $status = mysqli_real_escape_string($con, $_POST['status']);

    // Insert data into the database
    $insert_query = "INSERT INTO candidates (candidateID, fname, lname, phoneNumber, home_address, job_status) 
                     VALUES (?, ?, ?, ?, ?, ?)";

    // Prepare the statement
    $stmt = $con->prepare($insert_query);

    // Bind parameters
    $stmt->bind_param("sssiss", $candidateName, $firstName, $lastName, $phoneNumber, $address, $status);

    // Execute the statement
    if ($stmt->execute()) {
        // Registration successful, redirect to a success page or display a success message
        echo "<script>alert('Candidate addition successful!'); window.location='../view/candidatesPage.php';</script>";
        exit();
    } else {
        // Registration failed, display an error message
        echo "Error: " . mysqli_error($con);
    }
}
