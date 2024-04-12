<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Interviews Page</title>
    <link rel="stylesheet" href="register.css" />
</head>

<body>
    <h1>Modify Interview Information</h1>
    <?php include('interviewInfo.php'); ?>
    <div class="container">
        <div class="container">
            <div class="registration-form">
                <form action="edit_interviews.php" method="post">
                    <input type="hidden" name="interviewID" value="<?= $interview['interviewID'] ?>">

                    <div class="form-group" style="margin-bottom: 20px;">
                        <label for="candidateName">Candidate Name:</label><br />
                        <select id="candidateName" name="candidateName">
                            <?php include("candidateNames_fuxn.php"); ?>
                        </select>
                    </div>

                    <div class="form-group" style="margin-bottom: 20px;">
                        <label for="jobID">Applied Job:</label><br />
                        <select id="jobID" name="jobID">
                            <?php include('job_fxn.php'); ?>
                        </select>
                    </div>

                    <label for="interviewDate">Interview Date:</label><br />
                    <input type="date" id="interviewDate" name="interviewDate" min="<?php echo date('Y-m-d'); ?>" required />


                    <label for="interviewEmail">Interviewer Email:</label><br />
                    <input type="text" id="interviewEmail" name="interviewEmail" /><br /><br />

                    <label for="interviewStatus">Interview Status:</label><br />
                    <select id="interviewStatus" name="interviewStatus">
                        <option value="select">--select--</option>
                        <option value="Pending">Pending</option>
                        <option value="Scheduled">Scheduled</option>
                        <option value="Completed">Completed</option>
                        <option value="Cancelled">Cancelled</option>
                    </select><br /><br />

                    <button type="submit" name="update_interview" id="update_interview">Submit Interview Information</button>
                    <button type="button" onclick="window.location.href = 'main.php';" style="margin-top:30px;margin-left:30px;background-color:#007bff ;color:white">Main Page</button>
                    <button type="button" onclick="window.location.href = 'interviewsInfo.php';" style="background-color:#007bff ;color:white">Interview Information Page</button>

                </form>
            </div>
        </div>
        <!-- <div class="button-container">
            <button type="button" onclick="window.location.href = '../view/main.php';" style="margin-top:30px;margin-left:400px">Main Page</button>
            <button type="button" onclick="window.location.href = '../view/interviewsInfo.php';">Interview Information Page</button>
        </div> -->
    </div>
</body>

</html>
