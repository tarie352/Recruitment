<?php
include('../settings/connection.php');


// Check if the jobID parameter is set in the URL
if (isset($_GET['jobID'])) {

    // Sanitize the input to prevent SQL injection
    $jobID = mysqli_real_escape_string($con, $_GET['jobID']);


    // Write the DELETE query
    $delete_query = "DELETE FROM postings WHERE jobID = '$jobID'";

    // Execute the delete query
    if (mysqli_query($con, $delete_query)) {
        // Redirect to the job listings page after successful deletion
        header("Location: ../view/jobsPage.php");
        exit();
    } else {
        // If deletion fails, display an error message
        echo "Error deleting job: " . mysqli_error($con);
    }
}
