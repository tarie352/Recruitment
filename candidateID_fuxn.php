<?php
// Include the database connection file
include('connection.php');

// Write a SELECT query to retrieve candidate IDs from the candidates table
$select_query = "SELECT candidateID FROM candidates";

// Execute the query
$results = mysqli_query($con, $select_query);

// Check if the query execution was successful
if (!$results) {
    die("Query execution failed: " . mysqli_error($con));
}

// Loop through the results and populate the dropdown list
while ($row = mysqli_fetch_assoc($results)) {
    echo "<option value='" . $row['candidateID'] . "'>" . $row['candidateID'] . "</option>";
}

// Close the database connection
mysqli_close($con);
