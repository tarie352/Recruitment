<?php
// Include the database connection file
include('connection.php');

$query = "SELECT departmentID, departmentName FROM department";

// Execute the query
$result = $con->query($query);

if (!$result) {
    die("Query execution failed: " . mysqli_error($con));
}

// Loop through the results and populate the dropdown list
while ($row = mysqli_fetch_assoc($result)) {
    echo "<option value='" . $row['departmentID'] . "'>" . $row['departmentName'] . "</option>";
}

// Close the database connection
mysqli_close($con);
