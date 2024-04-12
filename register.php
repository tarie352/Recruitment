<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registration Page</title>
  <link rel="stylesheet" href="register.css" />
</head>

<body>
  <h1>Recruitment Revolution: Registration Form</h1>
  <div class="registration-form">
    <form action="register_action.php" method="POST">
      <label for="firstName">First Name:</label><br />
      <input type="text" id="firstName" name="firstName" pattern="[A-Za-z]{1,255}" required /><br /><br />

      <label for="lastName">Last Name:</label><br />
      <input type="text" id="lastName" name="lastName" pattern="[A-Za-z]{1,255}" required /><br /><br />

      <label for="email">Email Address:</label><br />
      <input type="email" id="email" name="email" required /><br /><br />

      <label for="companyName">Company Name:</label><br />
      <input type="text" id="companyName" name="companyName" pattern=".{1,255}" required /><br /><br />

      <label for="recruiterCode">Recruiter Code:</label><br />
      <input type="number" id="recruiterCode" name="recruiterCode" pattern="[0-9]{1,10}" required /><br /><br />


      <label for="industry">Industry:</label><br />
      <select id="industry" name="industry" required>
        <option value="0">- Select Industry -</option>
        <option value="Technology">Technology</option>
        <option value="Healthcare">Healthcare</option>
        <option value="Finance">Finance</option>
        <option value="Education">Education</option>
        <option value="Retail">Retail</option>
        <option value="Manufacturing">Manufacturing</option>
        <option value="Hospitality">Hospitality</option>
        <option value="Entertainment">Entertainment</option>
        <option value="Real Estate">Real Estate</option>
        <option value="Transportation">Transportation</option>
        <option value="Other">Other</option>
      </select><br /><br />

      <label for="phoneNumber">Phone Number:</label><br />
      <input type="tel" id="phoneNumber" name="phoneNumber" pattern="[0-9]{10,15}" required /><br /><br />

      <label for="username">Username:</label><br />
      <input type="text" id="username" name="username" pattern="[A-Za-z0-9_]{5,20}" required /><br /><br />

      <label for="password">Password:</label><br />
      <input type="password" id="password" name="password" pattern=".{8,}" required /><br /><br />

      <button type="submit">Register</button>
      <p style="text-align: center; margin-top: 5px">
        Already a member? <a href="login.html" target="_blank">Go to Login</a>
      </p>
    </form>
  </div>
  <div class="button-container">
    <button type="button" onclick="window.location.href = 'landingPage.php';" style="margin-top:30px;margin-left:400px">Landing Page</button>

  </div>
</body>

</html>
