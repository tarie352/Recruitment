<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Job Addition Page</title>
  <link rel="stylesheet" href="../css/register.css" />
</head>

<body>
  <h1>Recruitment Revolution: Job Addition</h1>

  <div class="container">
    <div class="registration-form">
      <form action="../actions/addition.php" method="POST">
        <label for="jobID">Job ID:</label><br />
        <input type="text" id="jobID" name="jobID" /><br /><br />

        <label for="title">Title:</label><br />
        <input type="text" id="title" name="title" /><br /><br />

        <label for="description">Description:</label><br />
        <textarea id="description" name="description" rows="4" cols="50"></textarea><br /><br />

        <label for="requirement">Requirement:</label><br />
        <textarea id="requirement" name="requirement" rows="4" cols="50"></textarea><br /><br />

        <label for="submissionMethod">Submission Method:</label><br />
        <select id="submissionMethod" name="submissionMethod">
          <option value="select">--select--</option>
          <option value="Online">Online</option>
          <option value="Email">Email</option>
          <option value="In Person DropOff">In Person</option>
          <option value="Mail">Mail</option>
          <option value="Any Of The Above">Any Of The Above</option>
        </select><br /><br />


        <label for="departmentID">Department:</label><br />
        <select id="departmentID" name="departmentID">
          <?php include('../functions/department_func.php'); ?>
        </select><br /><br />

        <label for="status">Status:</label><br />
        <select id="jobStatus" name="jobStatus">
          <option value="select">--select--</option>
          <option value="Active">Active</option>
          <option value="Inactive">Inactive</option>
        </select><br /><br />

        <label for="applicationDeadline">Application Deadline:</label><br />
        <input type="date" id="applicationDeadline" name="applicationDeadline" min="<?php echo date('Y-m-d'); ?>" /><br /><br />

        <button type="submit" name="addJob" id="addJob">Add Job</button>
        <button type="button" onclick="window.location.href = '../view/main.php';" style="margin-top:30px;margin-left:30px; height:30px; background-color:#007bff;color:white">Main Page</button>
        <button type="button" onclick="window.location.href = '../view/jobsPage.php';" style="height:30px; background-color:#007bff;color:white">Jobs Information Page</button>
        <button type="button" onclick="window.location.href = '../actions/logout.php';" style="height:30px; background-color:#007bff;color:white">Log Out</button>

      </form>
    </div>
  </div>


</body>

</html>