<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Interviews Page</title>
  <link rel="stylesheet" href="../css/register.css" />
</head>

<body>
  <h1>Recruitment Revolution: Interview Scheduling and Updates</h1>

  <div class="container">
    <div class="registration-form">
      <form action="../actions/interviews_action.php" method="POST">
        <label for="interviewID">Interview ID:</label><br />
        <input type="text" id="interviewID" name="interviewID" /><br /><br />

        <div class="form-group">
          <label for="candidateID">Candidate Name :</label><br />
          <select id="candidateName" name="candidateName">
            <?php include("../functions/candidateNames_fuxn.php"); ?>
          </select>
        </div>

        <div class="form-group">
          <label for="jobID">Applied Job:</label><br />
          <select id="jobID" name="jobID">
            <?php include('../functions/job_fxn.php'); ?>
          </select>
        </div>


        <label for="interviewDate">Interview Date:</label><br />
        <input type="date" id="interviewDate" name="interviewDate" min="<?php echo date('Y-m-d'); ?>" /><br /><br />

        <label for="interviewerEmail">Interviewer Email Address:</label><br />
        <input type="email" id="email" name="email" /><br /><br />

        <label for="interviewStatus">Interview Status:</label><br />
        <select id="interviewStatus" name="interviewStatus">
          <option value="select">--select--</option>
          <option value="Pending">Pending</option>
          <option value="Scheduled">Scheduled</option>
          <option value="Completed">Completed</option>
          <option value="Cancelled">Cancelled</option>
        </select><br /><br />

        <button type="submit" name="addInterview" id="addInterview">Submit Interview Information</button>
        <button type="button" onclick="window.location.href = '../view/main.php';" style="margin-top:30px;margin-left:10px; height:30px; background-color:#007bff;color:white;">Main Page</button>
        <button type="button" onclick="window.location.href = '../view/interviewsInfo.php';" style="margin-top:30px;margin-left:10px;width:150px;height:30px;background-color:#007bff;color:white;">Interviews Page</button>
        <button type="button" onclick="window.location.href = '../actions/logout.php';" style="height:30px; background-color:#007bff;color:white">Log Out</button>


    </div>



</body>

</html>