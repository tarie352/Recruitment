<?php

// $servername = "localhost";
// $database = "recruitment";
// $username = "root";
// $password = "";

// $con = mysqli_connect($servername, $username, $password, $database);

// if (!$con) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"], 1);

// Connect to DB
$con = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
?>

