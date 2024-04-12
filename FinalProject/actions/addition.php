<?php
// Error Reporting
error_reporting(E_ALL);
// Include the database connection file
include('../settings/connection.php');


if (isset($_POST['addJob'])) {
    // Data Validation
    $jobID = $_POST['jobID'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $requirement = $_POST['requirement'];
    $submission = $_POST['submissionMethod'];
    $deptID = $_POST['departmentID'];
    $status = $_POST['jobStatus'];
    $dateDue = $_POST['applicationDeadline'];

    // SQL Injection Prevention using prepared statements
    $insert_query = "INSERT INTO postings (jobID, title, jobDescription, requirement, submission, departmentID, jobStatus, dateDue)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    // Prepare and bind parameters
    $stmt = $con->prepare($insert_query);
    $stmt->bind_param("ssssssss", $jobID, $title, $description, $requirement, $submission, $deptID, $status, $dateDue);

    // Execute the statement
    if ($stmt->execute()) {
        // Redirect to the jobs page after successful insertion
        header("Location: ../view/jobsPage.php");
        exit();
    } else {
        // Handle errors
        echo "Error: " . $stmt->error;
        exit();
    }
}
