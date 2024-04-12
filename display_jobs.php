<?php
include('connection.php');

function displayJobListingsTable($con)
{
    // Write a SELECT query on the "postings" table
    $select_query = "SELECT * FROM postings";

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
        echo "<th class='job-id'>Job ID</th>";
        echo "<th class='title'>Title</th>";
        echo "<th class='description'>Description</th>";
        echo "<th class='requirement'>Requirement</th>";
        echo "<th class='submission'>Submission</th>";
        echo "<th class='departmentID'>Department ID</th>";
        echo "<th class='status'>Status</th>";
        echo "<th class='deadline'>Application Deadline</th>";
        echo "<th class='action'>Action</th>";
        echo "</tr>";

        // Fetch and display each job posting
        while ($row = mysqli_fetch_assoc($results)) {
            echo "<tr>";
            echo "<td>" . $row['jobID'] . "</td>";
            echo "<td>" . $row['title'] . "</td>";
            echo "<td>" . $row['jobDescription'] . "</td>";
            echo "<td>" . $row['requirement'] . "</td>";
            echo "<td>" . $row['submission'] . "</td>";
            echo "<td>" . $row['departmentID'] . "</td>";
            echo "<td>" . $row['jobStatus'] . "</td>";
            echo "<td>" . $row['applicationDeadline'] . "</td>";
            echo "<td>";
            echo "<button onclick=\"window.location.href='modify_job.php?jobID=" . $row["jobID"] . "'\">Edit</button>";
            echo "</td>";
            echo "<td>";
            echo "<a href='delete_job_action.php?jobID=" . $row["jobID"] . "'><i class='bx bxs-trash-alt'></i>Delete</a></td>";

            echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No job postings found";
    }
}
?>

<!-- <script>
    function deleteJob(jobID) {
        // You can add JavaScript logic here if needed
    }
</script> -->
