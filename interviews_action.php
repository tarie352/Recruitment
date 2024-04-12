<?php
error_reporting(E_ALL);

// Include the database connection file
include('connection.php');

if (isset($_POST['addInterview'])) {
    $interviewID = $_POST['interviewID'];
    $candidateApplicationID = $_POST['candidateName'];
    $jobID = $_POST['jobID'];
    $date = $_POST['interviewDate'];
    $email = $_POST['email'];
    $status = $_POST['interviewStatus'];


    $insert_query = "INSERT INTO interviews (interviewID, candidateName, jobID, interviewDate,interviewer, interviewStatus)
    VALUES (?, ?, ?, ?, ?, ?)";

    // Prepare and bind parameters
    $stmt = $con->prepare($insert_query);
    $stmt->bind_param("ssssss", $interviewID, $candidateApplicationID, $jobID, $date, $email, $status);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<script>alert('Interview addition successful!'); window.location='interviewsPage.php';</script>";

        exit();
    } else {
        // If an error occurs, let's output the error message
        // header("Location: ../view/department.php");
        echo "Error: " . $stmt->error;
        exit();
    }
}
