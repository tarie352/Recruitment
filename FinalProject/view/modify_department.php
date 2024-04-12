<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Departments Page</title>
    <link rel="stylesheet" href="../css/department.css" />
</head>

<body>
    <header>
        <div class="header-links">
            <h2 class="heading">RECRUITMENT REVOLUTION: Departments</h2>
            <a href="../view/postings.php" class="header-link">Back to Postings Page</a>

        </div>
    </header>

    <div class="depart">
        <form action="../actions/edit_department.php" method="POST">
            <input type="hidden" id="deptID" name="deptID" value="<?= $department['departmentID'] ?>" /><br /><br />

            <label for="departmentName">Department Name:</label><br />
            <input type="text" id="departmentName" name="departmentName" /><br /><br />

            <label for="departmentManager">Manager Last Name:</label><br />
            <input type="text" id="departmentManager" name="departmentManager" /><br /><br />

            <label for="departmentEmail">Department Email Address:</label><br />
            <input type="email" id="departmentEmail" name="departmentEmail" /><br /><br />

            <button type="submit" id="update_dept" name="update_dept">Update Department</button>
        </form>
    </div>

    <div class="button-container">
        <button type="button" onclick="window.location.href = '../view/main.php';" style="margin-top:30px;margin-left:400px">Main Page</button>
        <button type="button" onclick="window.location.href = '../view/departmentsInfo.php';">Departments Information Page</button>
        <button type="button" onclick="window.location.href = '../actions/logout.php';" style="height:30px; background-color:#007bff;color:white">Log Out</button>
    </div>

</body>

</html>