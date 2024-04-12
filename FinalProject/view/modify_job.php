<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/register.css" />
    <title>Modify Job</title>
</head>

<body>

    <h1>Modify Job</h1>
    <?php include('../actions/jobInfo.php')
    ?>
    <form action="../actions/edit_job_action.php" method="post">
        <input type="hidden" name="jobID" value="<?= $job['jobID'] ?>">
        <label for="title" style="color: white">Title:</label>
        <input type="text" id="title" name="title" value="<?= $job['title'] ?>"><br><br>

        <label for="description" style="color: white">Description:</label>
        <input type="text" id="description" name="description" value="<?= $job['jobDescription'] ?>"><br><br>

        <label for="requirement" style="color: white">Requirement:</label>
        <input type="text" id="requirement" name="requirement" value="<?= $job['requirement'] ?>"><br><br>

        <label for="submissionMethod" style="color: white">Submission Method:</label><br />
        <select id="submissionMethod" name="submissionMethod">
            <option value="select">--select--</option>
            <option value="Online">Online</option>
            <option value="Email">Email</option>
            <option value="In Person DropOff">In Person</option>
            <option value="Mail">Mail</option>
            <option value="Any Of The Above">Any Of The Above</option>
        </select><br />

        <label for="departmentID" style="color: white">Department:</label><br />
        <select id="departmentID" name="departmentID">
            <?php include('../functions/department_func.php'); ?>
        </select><br /><br />

        <label for="status" style="color: white">Status:</label><br />
        <select id="jobStatus" name="jobStatus">
            <option value="select">--select--</option>
            <option value="Active">Active</option>
            <option value="Inactive">Inactive</option>
        </select><br /><br />

        <label for="applicationDeadline" style="color: white">Application Deadline:</label><br />
        <input type="date" id="applicationDeadline" name="applicationDeadline" min="<?php echo date('Y-m-d'); ?>" /><br /><br />

        <button type="submit" name='update_button'>Update Job</button>
    </form>

    <div class="button-container">
        <button type="button" onclick="window.location.href = '../view/main.php';" style="margin-top:30px;margin-left:400px">Main Page</button>
        <button type="button" onclick="window.location.href = '../view/jobsPage.php';">Jobs Information Page</button>
        <button type="button" onclick="window.location.href = '../actions/logout.php';" style="height:30px; background-color:#007bff;color:white">Log Out</button>
    </div>

</body>

</html>