<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <h1>RECRUITMENT REVOLUTION LOGIN PAGE</h1>
    <div class="login">
        <h1>LOGIN</h1>
        <form action="login_action.php" method="POST">
            <input type="text" placeholder="Username" name="email" required>
            <input type="password" placeholder="Password" name="password" required>
            <button type="submit" name="login_v" id="login_v">Login</button>
        </form>
        <p>Don't have an account? <a href="register.php">Sign Up</a></p>
        <p>Forgot your password? <a href="resetPassword.html">Reset Password</a></p>
    </div>
    <script>
        // Regular expressions
        const inputFieldRegex = /<input type="(?:text|password)"[^>]*>/g;
        const submitButtonRegex = /<button type="submit">[^<]*<\/button>/g;

        // Get the HTML content of the form
        const formHTML = document.querySelector('.login form').innerHTML;

        // Extract input fields and submit button using regex
        const inputFields = formHTML.match(inputFieldRegex);
        const submitButton = formHTML.match(submitButtonRegex);

        // Display extracted input fields and submit button
        console.log("Input fields:", inputFields);
        console.log("Submit button:", submitButton);
    </script>
</body>

</html>
