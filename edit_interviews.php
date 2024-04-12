<?php
include('../settings/connection.php');


if (isset($_POST['update_interview'])) {


    // Retrieve form data
    $interviewID = $_POST['interviewID'];
    $candidateName = $_POST['candidateName'];
    $jobID = $_POST['jobID'];
    $interviewDate = $_POST['interviewDate'];
    $interviewEmail = $_POST['interviewEmail'];
    $interviewStatus = $_POST['interviewStatus'];


    // Prepare update statement
    $sql = "UPDATE interviews SET candidateName=?, jobID=?, interviewDate=?, interviewEmail=?, interviewStatus=? WHERE interviewID=?";

    // Prepare and execute the statement
    $stmt = $con->prepare($sql);
    $stmt->bind_param("siissi", $candidateName, $jobID, $interviewDate, $interviewEmail, $interviewStatus, $interviewID);

    if ($stmt->execute()) {
        header("Location: ../view/interviewsInfo.php");
        exit();
    } else {
        echo "Error updating record: " . $stmt->error;
    }


    // Close statement
    $stmt->close();
}

// Close connection
$con->close();
