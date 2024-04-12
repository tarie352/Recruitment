<?php
include('connection.php');

function displayResumesTable($con)
{
    // Fetch resumes from the database
    $resumes_query = "SELECT * FROM resumes";
    $resumes_result = $con->query($resumes_query);

    if ($resumes_result->num_rows > 0) {
        // Display resumes
        echo "<table>";
        echo "<tr>";
        echo "<th>Resume ID</th>";
        echo "<th>Resume Name</th>";
        echo "<th>Action</th>";
        echo "</tr>";

        while ($row = $resumes_result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['resumeID'] . "</td>";
            echo "<td>" . $row['resumeName'] . "</td>";
            echo "<td>";
            echo "<a href='../pdf/{$row['resumeName']}' download>Download</a>";
            echo "<form action='deleteResume.php' method='POST'>";
            echo "<input type='hidden' name='resumeID' value='{$row['resumeID']}'>";
            echo "<button type='submit' name='delete'>Delete</button>";
            echo "</form>";
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No resumes found.";
    }
}

// Call the function to display the resumes table
displayResumesTable($con);
