<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Departments Page</title>
    <link rel="stylesheet" href="../css/jobsPage.css" />
</head>

<body>
    <h1>RECRUITMENT REVOLUTION: Available Jobs</h1>


    <main>
        <div class="job-listings">
            <?php
            // Include the database connection file
            include('../settings/connection.php');
            // Include the function to display job listings table
            include('../functions/display_jobs.php');


            // Call the function to display job listings table
            displayJobListingsTable($con);

            mysqli_close($con);
            ?>
        </div>
    </main>

    <div class="button-container">
        <button type="button" onclick="window.location.href = '../view/main.php';" style="margin-top:30px;margin-left:550px">Main Page</button>
        <button type="button" onclick="window.location.href = '../view/jobs.php';">Back To Jobs Information Page</button>
        <button type="button" onclick="window.location.href = '../actions/logout.php';">Log Out</button>
    </div>



    <script>
        // Function to handle editing a job
        function editJob(jobID) {
            // Redirect the user to an edit page with the job ID as a parameter
            window.location.href = '../actions/edit_job.php?id=' + jobID;
        }

        // Function to handle deleting a job
        function deleteJob(jobID) {
            window.location.href = '../actions/delete_job.php?id=' + jobID;

        }
    </script>

</body>

</html>