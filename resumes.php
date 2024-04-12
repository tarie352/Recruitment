<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Resumes Page</title>
  <link rel="stylesheet" href="register.css" />
</head>

<body>
  <h1>Recruitment Revolution: Resume Uploads</h1>

  <div class="registration-form">
    <form action="resumeAddition.php" method="POST" enctype="multipart/form-data">
      <div class="form-input py-2">
        <div class="form-group">
          <input type="text" class="form-control" name="name" placeholder="Enter Resume name" required>
        </div>

        <div class="form-group">
          <label for="candidateName">Candidate Name:</label><br />
          <select id="candidateID" name="candidateID">
            <?php include('candidateNames_fuxn.php'); ?>
          </select><br /><br />
        </div>
        <div class="form-group">
          <input type="file" name="pdf_file" class="form-control" accept=".pdf" title="Upload Resume " />
        </div>
        <div class="form-group">
          <input type="submit" class="btnRegister" name="submit" value="Submit">
        </div>
      </div>





      <!-- <button type="submit" name="addResume">Complete Resume Submission</button> -->
    </form>

    <div class="button-container">
      <button type="button" onclick="window.location.href = '../view/main.php';" style="margin-top:30px;margin-left:30px">Main Page</button>
      <button type="button" onclick="window.location.href = '../view/resumesInfo.php';">Resumes Information Page</button>
      <button type="button" onclick="window.location.href = '../actions/logout.php';" style="height:30px; background-color:#007bff;color:white">Log Out</button>
    </div>
  </div>
</body>

</html>
