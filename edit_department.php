<?php
error_reporting(E_ALL);
session_start();

// Include the database connection file
include('connection.php');

// Check if the form was submitted
if (isset($_POST['update_dept'])) {
    // Extract data from the form
    $departmentID = $_POST['departmentID'];
    $departmentName = $_POST['departmentName'];
    $departmentManager = $_POST['departmentManager'];
    $departmentEmail = $_POST['departmentEmail'];

    // Prepare the UPDATE query
    $update_query = "UPDATE department SET departmentName = ?, departmentManager = ?, departmentEmail = ? WHERE departmentID = ?";

    // Prepare and bind parameters
    $stmt = $con->prepare($update_query);
    $stmt->bind_param("ssss", $departmentName, $departmentManager, $departmentEmail, $departmentID);

    // Execute the prepared statement
    if ($stmt->execute()) {
        echo "<script>alert('Department information updated successfully!'); window.location='departmentPages.php';</script>";
        exit();
    } else {
        echo "Error updating department: " . $stmt->error;
        // Log the error for debugging purposes
        error_log("Error updating department: " . $stmt->error);
    }
}
