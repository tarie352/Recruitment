<?php
include('connection.php');

// Check if the candidateID parameter is set in the URL
if (isset($_GET['candidateID'])) {
    // Sanitize the input to prevent SQL injection
    $candidateID = mysqli_real_escape_string($con, $_GET['candidateID']);

    // Write the DELETE query
    $delete_query = "DELETE FROM candidates WHERE candidateID = '$candidateID'";

    // Execute the delete query
    if (mysqli_query($con, $delete_query)) {
        // Redirect to the candidates page after successful deletion
        header("Location: candidatesPage.php");
        exit();
    } else {
        // If deletion fails, display an error message
        echo "Error deleting candidate: " . mysqli_error($con);
    }
}
