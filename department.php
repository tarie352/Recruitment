<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Departments Page</title>
  <link rel="stylesheet" href="department.css" />
</head>

<body>
  <header>
    <div class="header-links">
      <h2 class="heading">RECRUITMENT REVOLUTION: Departments</h2>

    </div>
  </header>

  <div class="depart">
    <form action="department_action.php" method="POST">
      <label for="firstName">Department ID:</label><br />
      <input type="text" id="deptID" name="deptID" /><br /><br />

      <label for="firstName">Department Name:</label><br />
      <input type="text" id="firstName" name="firstName" /><br /><br />

      <label for="lastName">Manager Last Name:</label><br />
      <input type="text" id="lastName" name="lastName" /><br /><br />

      <label for="email">Department Email Address:</label><br />
      <input type="email" id="email" name="email" /><br /><br />

      <button type="submit" id="addDep" name="addDept">Add Department</button>
      <button type="button" onclick="window.location.href = 'main.php';" style="margin-top:30px;margin-left:10px; height:30px; background-color:#007bff;color:white;">Main Page</button>
      <button type="button" onclick="window.location.href = 'departmentsInfo.php';" style="margin-top:30px;margin-left:10px;width:190px;height:30px;background-color:#007bff;color:white;">Departments Information</button>
      <button type="button" onclick="window.location.href = 'logout.php';" style="height:30px; background-color:#007bff;color:white">Log Out</button>
      </p>
    </form>
    <br />

  </div>

</html>
