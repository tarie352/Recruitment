<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Candidates Page</title>
    <link rel="stylesheet" href="jobsPage.css" />
</head>

<body>
    <h1>RECRUITMENT REVOLUTION: Candiadates Page Jobs</h1>


    <main>
        <div class="candidate-listings">
            <?php
            include("candidate_fuxn.php");

            // Close the database connection
            mysqli_close($con);
            ?>
        </div>
    </main>

    <div class="button-container">
        <button type="button" onclick="window.location.href = 'main.php';" style="margin-top:30px;margin-left:40px;">Main Page</button>
        <button type="button" onclick="window.location.href = 'candidatesPage.php';" style="margin-top:30px;margin-left:40px;">Candidates Page</button>
        <button type="button" onclick="window.location.href = 'logout.php';">Log Out</button>
    </div>


</body>
