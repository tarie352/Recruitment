<?php
error_reporting(E_ALL);
session_start();
// Include the database connection file
include('connection.php');


// Check if the form was submitted
if (isset($_POST['update_button'])) {
    // Sanitize inputs to prevent SQL injection
    $jobID = mysqli_real_escape_string($con, $_POST['jobID']);
    $title = mysqli_real_escape_string($con, $_POST['title']);
    $jobDescription = mysqli_real_escape_string($con, $_POST['description']);
    $requirement = mysqli_real_escape_string($con, $_POST['requirement']);
    $submission = mysqli_real_escape_string($con, $_POST['submissionMethod']);
    $departmentID = mysqli_real_escape_string($con, $_POST['departmentID']);
    $jobStatus = mysqli_real_escape_string($con, $_POST['jobStatus']);
    $dateDue = $_POST['applicationDeadline'];
    $formattedDateDue = date('Y-m-d', strtotime($dateDue));


    // Prepare the UPDATE query
    $update_query = "UPDATE postings SET title = ?, jobDescription = ?, requirement = ?, submission = ?, departmentID = ?, jobStatus = ?, dateDue = ? WHERE jobID = ?";


    // Prepare and bind parameters
    $stmt = $con->prepare($update_query);
    $stmt = $con->prepare($update_query);
    if ($stmt) {
        $stmt->bind_param("ssssssss", $title, $jobDescription, $requirement, $submission, $departmentID, $jobStatus, $formattedDateDue, $jobID);
        // Execute the statement
        if ($stmt->execute()) {
            // Redirect to the job listings page after successful update
            header("Location: jobsPage.php");
            exit();
        } else {
            // If execution fails, display an error message
            echo "Error updating job: " . $stmt->error;
        }
    } else {
        // If preparation fails, display an error message
        echo "Error preparing statement: " . $con->error;
    }


}
