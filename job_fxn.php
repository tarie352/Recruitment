<?php
// Include the database connection file
include('connection.php');

// Write a SELECT query on the "postings" table
$select_query = "SELECT * FROM postings";

// Execute the query using the connection and check if execution worked
$results = mysqli_query($con, $select_query);

if (!$results) {
    die("Query execution failed: " . mysqli_error($con));
}

// Fetch the results
if (mysqli_num_rows($results) > 0) {
    // Initialize an empty array to store the fetched data
    $data = array();

    // Fetch all rows as an associative array
    while ($row = mysqli_fetch_assoc($results)) {
        // Store each row in the data array
        $data[] = $row;
    }

    // Output the fetched data to build the dropdown menu
    foreach ($data as $row) {
        echo "<option value='" . $row['jobID'] . "'>" . $row['title'] . "</option>";
    }
} else {
    echo "<option value=''>No job postings found</option>";
}

// Close the database connection
mysqli_close($con);
