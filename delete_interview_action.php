<?php
include('../settings/connection.php');


// Check if the job_ID parameter is set in the URL
if (isset($_GET['interview_ID'])) {

    // Sanitize the input to prevent SQL injection
    $interview_ID = mysqli_real_escape_string($con, $_GET['interview_ID']);

    // Write the DELETE query
    $delete_query = "DELETE FROM interviews WHERE interviewID = '$interview_ID'";

    // Execute the delete query
    if (mysqli_query($con, $delete_query)) {
        // Redirect to the job listings page after successful deletion
        header("Location: ../view/interviewsPage.php");
        exit();
    } else {
        // If deletion fails, display an error message
        echo "Error deleting job: " . mysqli_error($con);
    }
}
