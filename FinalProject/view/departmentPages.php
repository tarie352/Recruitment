<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Departments Page</title>
    <link rel="stylesheet" href="../css/jobsPage.css" />
</head>

<body>
    <h1>RECRUITMENT REVOLUTION: Department Page Jobs</h1>


    <main>
        <div class="candidate-listings">
            <?php
            include("../functions/department_fuxn.php");

            // Close the database connection
            mysqli_close($con);
            ?>
        </div>
    </main>
    <div class="button-container">
        <button type="button" onclick="window.location.href = '../view/main.php';" style="margin-top:30px;margin-left:400px">Main Page</button>
        <button type="button" onclick="window.location.href = '../view/departmentsInfo.php';">Department Information Page</button>
        <button type="button" onclick="window.location.href = '../actions/logout.php';" style="height:30px; background-color:#007bff;color:white">Log Out</button>
    </div>

</body>