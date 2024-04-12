<?php
include('connection.php');

function displayInterviewsTable($con)
{
    // Write a SELECT query on the "interviews" table
    $select_query = "SELECT * FROM interviews";

    // Execute the query using the connection and check if execution worked
    $results = mysqli_query($con, $select_query);

    if (!$results) {
        die("Query execution failed: " . mysqli_error($con));
    }

    // Check if there are any interviews
    if (mysqli_num_rows($results) > 0) {
        // Start building the table
        echo "<table>";
        echo "<tr><th>Interview ID</th><th>Candidate Name</th><th>Job ID</th><th>Interview Date</th><th>Interviewer</th><th>Interview Status</th><th>Action</th></tr>";

        // Fetch and display each interview
        while ($row = mysqli_fetch_assoc($results)) {
            echo "<tr>";
            echo "<td>" . $row['interviewID'] . "</td>";
            echo "<td>" . $row['candidateName'] . "</td>";
            echo "<td>" . $row['jobID'] . "</td>";
            echo "<td>" . $row['interviewDate'] . "</td>";
            echo "<td>" . $row['interviewer'] . "</td>";
            echo "<td>" . $row['interviewStatus'] . "</td>";
            echo "<td>";
            echo "<a href='modify_interviews.php?interview_ID=" . $row["interviewID"] . "'><i class='bx bxs-edit'></i>Edit</a>";
            echo " | ";
            echo "<a href='delete_interview_action.php?interview_ID=" . $row["interviewID"] . "'><i class='bx bxs-trash'></i>Delete</a>";
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No interviews found";
    }
}
