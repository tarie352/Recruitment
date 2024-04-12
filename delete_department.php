<?php
error_reporting(E_ALL);
// Include your database connection file
include_once "connection.php";

// Check if departmentID is provided
if (isset($_GET["departmentID"])) {
    // Sanitize the departmentID to prevent SQL injection
    $departmentID = mysqli_real_escape_string($con, $_GET['departmentID']);

    $delete_query = "DELETE FROM department WHERE departmentID = '$departmentID'";

    // Execute the delete query
    if (mysqli_query($con, $delete_query)) {
        // Redirect to the job listings page after successful deletion
        header("Location: departmentPages.php");
        exit();
    } else {
        // If deletion fails, display an error message
        echo "Error deleting job: " . mysqli_error($con);
    }
}
