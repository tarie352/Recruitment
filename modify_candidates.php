<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Candidate Registration Page</title>
    <link rel="stylesheet" href="register.css" />
</head>

<body>
    <h1>Candidate Registration Form</h1>
    <div class="registration-form">
        <form action="editCandidates.php" method="POST">
            <!-- <label for="firstName">Candidate ID:</label><br /> -->
            <input type="hidden" name="candidateID" value="<?php echo $candidate['candidateID']; ?>" /><br /><br />

            <label for="firstName">First Name:</label><br />
            <input type="text" id="firstName" name="firstName" pattern="[A-Za-z]{1,255}" required value="<?php echo $candidate['firstName']; ?>" /><br /><br />

            <label for="lastName">Last Name:</label><br />
            <input type="text" id="lastName" name="lastName" pattern="[A-Za-z]{1,255}" required value="<?php echo $candidate['lastName']; ?>" /><br /><br />

            <label for="phoneNumber">Phone Number:</label><br />
            <input type="tel" id="phoneNumber" name="phoneNumber" pattern="[0-9]{10,15}" required value="<?php echo $candidate['phoneNumber']; ?>" /><br /><br />

            <label for="address">Address:</label><br />
            <textarea id="address" name="address" required><?php echo $candidate['address']; ?></textarea><br /><br />

            <label for="status">Status:</label><br />
            <select id="status" name="status" required>
                <option value="">- Select Status -</option>
                <option value="Available" <?php if ($candidate['status'] == "Available") echo "selected"; ?>>Available</option>
                <option value="Unavailable" <?php if ($candidate['status'] == "Unavailable") echo "selected"; ?>>Unavailable</option>
                <option value="In Progress" <?php if ($candidate['status'] == "In Progress") echo "selected"; ?>>In Progress</option>
                <option value="Hired" <?php if ($candidate['status'] == "Hired") echo "selected"; ?>>Hired</option>
                <option value="Not Hired" <?php if ($candidate['status'] == "Not Hired") echo "selected"; ?>>Not Hired</option>
                <option value="Other" <?php if ($candidate['status'] == "Other") echo "selected"; ?>>Other</option>
            </select><br /><br />

            <button type="submit" name="candidate_update">Update Candidate</button>
        </form>
    </div>

    <div class="button-container">
        <button type="button" onclick="window.location.href = 'main.php';" style="margin-top:30px;margin-left:400px">Main Page</button>
        <button type="button" onclick="window.location.href = 'candidatesInfo.php';">Candidates Information Page</button>
        <button type="button" onclick="window.location.href = 'logout.php';" style="height:30px; background-color:#007bff;color:white">Log Out</button>
    </div>
</body>

</html>
