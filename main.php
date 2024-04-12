<?php
// Start or resume the session
session_start();

// Check if the user is not logged in, redirect to login page
if (!isset($_SESSION['email'])) {
  header("Location: login.php");
  exit();
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Recruitment Portal</title>
  <link rel="stylesheet" href="posting.css" />
</head>

<body>
  <header>
    <div class="header-links">
      <a href="#" class="header-info">
        <h2 class="heading">RECRUITMENT REVOLUTION: Main Page</h2>
      </a>
      <a href="logout.php" class="header-link">Logout</a>
      <a href="landingPage.php" class="header-link">Landing Page</a>
    </div>
  </header>

  <main>
    <div class="button-container">
      <a href="jobs.php">
        <button class="landing" style="
              background-image: url('pexels-vlada-karpovich-4050319.jpg');
            ">
          <h2 style="font-size:45px;">JOBS</h2>
        </button>
      </a>
      <a href="candidatesInfo.php">
        <button class="landing" style="
              background-image: url('pexels-resume-genius-18848929.jpg');
            ">
          <h2 style="font-size:45px;">CANDIDATES</h2>
        </button>
      </a>
      <a href="interviewsInfo.php">
        <button class="landing" style="
              background-image: url('pexels-mart-production-7255432.jpg');
            ">
          <h2 style="font-size:45px;">INTERVIEWS</h2>
          <!-- <p class="description">
            Elevate your recruitment strategy with our platform - streamlining
            the process and making finding top talent!
          </p> -->
        </button>
      </a>
      <a href="resumesInfo.php">
        <button class="landing" style="
              background-image: url('pexels-cottonbro-studio-5989943.jpg');
            ">
          <h2 style="font-size:45px;">RESUMES</h2>
          <!-- <p class="description">
            Optimize your interview scheduling process with our platform -
            simplifying coordination and making managing candidate interviews
            effortless!
          </p> -->
        </button>
      </a>
      <a href="departmentsInfo.php">
        <button class="landing" style="
              background-image: url('pexels-fauxels-3184423.jpg');
            ">
          <h2 style="font-size:45px;">DEPARTMENTS</h2>
          <!-- <p class="description">
            Optimize your interview scheduling process with our platform -
            simplifying coordination and making managing candidate interviews
            effortless!
          </p> -->
        </button>
      </a>


    </div>
  </main>
  <footer>
    <div class="footer-content">
      <div class="footer-links">
        <a href="#">Terms of Service</a>
        <a href="#">Privacy Policy</a>
      </div>
    </div>
  </footer>
</body>

</html>
