<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Job</title>
    <link rel="stylesheet" href="../css/jobAddition.css">
</head>

<body>
    <div class="container">
        <h2>Edit Job</h2>
        <div class="edit-job">
            <form action="../actions/edit_job_action.php" method="post">
                <input type="hidden" name="jobID" value="<?php echo $row['jobID']; ?>">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" value="<?php echo $row['title']; ?>">

                <label for="jobDescription">Job Description:</label>
                <textarea id="jobDescription" name="jobDescription"><?php echo $row['jobDescription']; ?></textarea>

                <label for="requirement">Requirement:</label>
                <input type="text" id="requirement" name="requirement" value="<?php echo $row['requirement']; ?>">

                <label for="submission">Submission:</label>
                <input type="text" id="submission" name="submission" value="<?php echo $row['submission']; ?>">

                <label for="jobStatus">Job Status:</label>
                <select id="jobStatus" name="jobStatus">
                    <option value="active" <?php if ($row['jobStatus'] == 'active') echo 'selected'; ?>>Active</option>
                    <option value="inactive" <?php if ($row['jobStatus'] == 'inactive') echo 'selected'; ?>>Inactive</option>
                </select>

                <label for="applicationDeadline">Application Deadline:</label>
                <input type="text" id="applicationDeadline" name="applicationDeadline" value="<?php echo $row['applicationDeadline']; ?>">

                <button type="submit">Update Job</button>
            </form>
        </div>
    </div>
</body>

</html>