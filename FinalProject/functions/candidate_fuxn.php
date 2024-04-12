<?php
include('../settings/connection.php');

// Write a SELECT query on the "candidates" table
$select_query = "SELECT * FROM candidates";

// Execute the query using the connection and check if execution worked
$results = mysqli_query($con, $select_query);

if (!$results) {
    die("Query execution failed: " . mysqli_error($con));
}

// Check if there are any candidates
if (mysqli_num_rows($results) > 0) {
    // Start building the table
    echo "<table>";
    echo "<tr>";
    echo "<th class='candidate-id'>Candidate ID</th>";
    echo "<th class='name'>Name</th>";
    echo "<th class='phone-number'>Phone Number</th>";
    echo "<th class='address'>Address</th>";
    echo "<th class='status'>Status</th>";
    echo "<th class='action'>Action</th>";
    echo "</tr>";

    // Fetch and display each candidate
    while ($row = mysqli_fetch_assoc($results)) {
        echo "<tr>";
        echo "<td>" . $row['candidateID'] . "</td>";
        echo "<td>" . $row['fname'] . " " . $row['lname'] . "</td>";
        echo "<td>" . $row['phoneNumber'] . "</td>";
        echo "<td>" . $row['home_address'] . "</td>";
        echo "<td>" . $row['job_status'] . "</td>";
        echo "<td>";
        echo "<button onclick=\"window.location.href='../view/modify_candidates.php?candidateID=" . $row["candidateID"] . "'\">Edit</button>";
        echo "<a href='../actions/delete_candidate_action.php?candidateID=" . $row["candidateID"] . "'><i class='bx bxs-trash-alt'>Delete</i></a>";
        echo "</td>";
        echo "</tr>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No candidates found";
}
