<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Interviews Page</title>
    <link rel="stylesheet" href="../css/jobsPage.css" />
</head>

<body>
    <h1>RECRUITMENT REVOLUTION: Interviews</h1>

    <button onclick="window.location.href = '../view/main.php';">Main Page</button>

    <!-- Button to logout -->
    <form action="logout.php" method="post">
        <button type="submit" name="logout">Logout</button>
    </form>

    <main>
        <div class="interview-listings">
            <?php
            // Include the function to display interview listings table
            include('../functions/interviews_fuxn.php');

            // Call the function to display interview listings table
            displayInterviewsTable($con);

            mysqli_close($con);
            ?>
        </div>
    </main>

    <div class="button-container">
        <button type="button" onclick="window.location.href = '../view/main.php';" style="margin-top:30px;margin-left:400px">Main Page</button>
        <button type="button" onclick="window.location.href = '../view/interviewsInfo.php';">Interviews Information Page</button>
        <button type="button" onclick="window.location.href = '../actions/logout.php';" style="height:30px; background-color:#007bff;color:white">Log Out</button>
    </div>
</body>

</html>