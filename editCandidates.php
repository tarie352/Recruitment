<?php
error_reporting(E_ALL);
session_start();
// Include the database connection file
include('connection.php');

// Check if the form was submitted
if (isset($_POST['candidate_update'])) {
    // Extract data from the form
    $candidateID = $_POST['candidateID'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $phoneNumber = $_POST['phoneNumber'];
    $address = $_POST['address'];
    $status = $_POST['status'];

    // Prepare the UPDATE query
    $update_query = "UPDATE candidates SET fname = ?, lname = ?, phoneNumber = ?, home_address = ?, job_status = ? WHERE candidateID = ?";

    // Prepare and bind parameters
    $stmt = $con->prepare($update_query);
    $stmt->bind_param("ssisss", $firstName, $lastName, $phoneNumber, $address, $status, $candidateID);

    // Execute the prepared statement
    if ($stmt->execute()) {
        echo "<script>alert('Candidate Editing successful!'); window.location='candidatesPage.php';</script>";
        exit();
    } else {
        // Display an error message
        echo "Error updating candidate: " . $stmt->error;
        // Log the error for debugging purposes
        error_log("Error updating candidate: " . $stmt->error);
    }
}
