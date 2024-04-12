<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Departments Page</title>
    <link rel="stylesheet" href="jobsPage.css" />
</head>

<body>
    <h1>RECRUITMENT REVOLUTION: Resumes Page </h1>


    <main>
        <div class="candidate-listings">
            <?php
            include("resumes_fuxn.php");

            // Close the database connection
            mysqli_close($con);
            ?>
        </div>
    </main>
    <div class="button-container">
        <button type="button" onclick="window.location.href = 'main.php';" style="margin-top:30px;margin-left:400px">Main Page</button>
        <button type="button" onclick="window.location.href = 'resumesInfo.php';">Resumes Information Page</button>
        <button type="button" onclick="window.location.href = 'logout.php';" style="height:30px; background-color:#007bff;color:white">Log Out</button>
    </div>


</body>
