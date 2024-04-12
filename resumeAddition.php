<?php
error_reporting(E_ALL);
// Include the database connection file
include('connection.php');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $candidateID = $_POST['candidateID'];


    if (isset($_FILES['pdf_file']['name'])) {
        $file_name = $_FILES['pdf_file']['name'];
        $file_tmp = $_FILES['pdf_file']['tmp_name'];

        move_uploaded_file($file_tmp, "../pdf/" . $file_name);

        $insertquery = "INSERT INTO resumes (candidateName,resumeName) VALUES(?,?)";
        $stmt = $con->prepare($insertquery);
        $stmt->bind_param("ss", $candidateID, $name);
        $stmt->execute();

        if ($stmt->execute()) {
            header("Location:resumePage.php");
            exit();
        } else {
            echo "Error: " . $stmt->error;
            exit();
        }
    }
}
