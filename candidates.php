<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Candidate Registration Page</title>
    <link rel="stylesheet" href="register.css" />
</head>

<body>
    <header>
        <h1>Candidate Registration Form</h1>
    </header>

    <div class="registration-form">
        <form action="../actions/candidateAddition.php" method="POST">
            <label for="candidateID">Candidate ID:</label><br />
            <input type="text" id="candidateID" name="candidateID" /><br /><br />

            <label for="firstName">First Name:</label><br />
            <input type="text" id="firstName" name="firstName" pattern="[A-Za-z]{1,255}" required /><br /><br />

            <label for="lastName">Last Name:</label><br />
            <input type="text" id="lastName" name="lastName" pattern="[A-Za-z]{1,255}" required /><br /><br />

            <label for="phoneNumber">Phone Number:</label><br />
            <input type="tel" id="phoneNumber" name="phoneNumber" pattern="[0-9]{10,15}" required /><br /><br />

            <label for="address">Address:</label><br />
            <textarea id="address" name="address" required></textarea><br /><br />

            <label for="status">Status:</label><br />
            <select id="status" name="status" required>
                <option value="">- Select Status -</option>
                <option value="Available">Available</option>
                <option value="Unavailable">Unavailable</option>
                <option value="In Progress">In Progress</option>
                <option value="Hired">Hired</option>
                <option value="Not Hired">Not Hired</option>
                <option value="Other">Other</option>
            </select><br /><br />

            <button type="submit" name="candidate_submit">Register</button>
            <button type="button" onclick="window.location.href = '../view/main.php';" style="margin-top:30px;margin-left:400px; height:30px; background-color:#007bff;color:white">Main Page</button>
            <button type="button" onclick="window.location.href = '../view/candidatesInfo.php';" style="height:30px; background-color:#007bff;color:white">Candidate Information Page</button>
            <button type="button" onclick="window.location.href = '../actions/logout.php';" style="height:30px; background-color:#007bff;color:white">Log Out</button>
        </form>
    </div>



</body>

</html>
