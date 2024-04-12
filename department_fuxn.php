<?php
// Include the database connection file
include('../settings/connection.php');

// Write a SELECT query on the "family_name" table
$select_query = "SELECT * FROM department";

// Execute the query using the connection and check if execution worked
$results = mysqli_query($con, $select_query);

if (!$results) {
    die("Query execution failed: " . mysqli_error($con));
}

// Check if there are any job postings
if (mysqli_num_rows($results) > 0) {
    // Start building the table
    echo "<table>";
    echo "<tr>";
    echo "<th class='department-id'>Department ID</th>";
    echo "<th class='departmentName'>Department Name</th>";
    echo "<th class='departmentManager'>Department Manager</th>";
    echo "<th class='departmentEmail'>Department Email</th>";
    echo "<th class='action'>Action</th>";
    echo "</tr>";

    // Fetch and display each job posting
    while ($row = mysqli_fetch_assoc($results)) {
        echo "<tr>";
        echo "<td>" . $row['departmentID'] . "</td>";
        echo "<td>" . $row['departmentName'] . "</td>";
        echo "<td>" . $row['departmentManager'] . "</td>";
        echo "<td>" . $row['departmentEmail'] . "</td>";
        echo "<td>";
        echo "<button onclick=\"window.location.href='../view/modify_department.php?job_ID=" . $row["departmentID"] . "'\">Edit</button>";
        echo "</td>";
        echo "<td>";
        echo "<a href='../actions/delete_department.php?departmentID=" . $row["departmentID"] . "'><i class='bx bxs-trash-alt'>Delete</i></a></td>";
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No interviews found";
}
