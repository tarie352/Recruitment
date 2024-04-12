<?php
require_once("connection.php");

$interview_ID = $_GET['interviewID'];
$query = "SELECT * FROM interviews WHERE interviewID = ?";
// echo $job_ID;

$stmt = mysqli_prepare($con, $query);

mysqli_stmt_bind_param($stmt, "s", $interview_ID);

mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
if (!$result) {
    die("Query execution failed: " . mysqli_error($con));
}

$job = mysqli_fetch_assoc($result);
// echo $job;
