<?php
// Include the database connection file
include('../settings/connection.php');

if (isset($_POST['addDept'])) {
    $departmentID = $_POST['deptID'];
    $departmentName = $_POST['firstName'];
    $departmentManager = $_POST['lastName'];
    $departmentEmail = $_POST['email'];

    // Check if the department ID or department name already exists in the database
    $check_query = "SELECT * FROM department WHERE departmentID = ? OR departmentName = ?";
    $stmt_check = $con->prepare($check_query);
    $stmt_check->bind_param("ss", $departmentID, $departmentName);
    $stmt_check->execute();
    $result_check = $stmt_check->get_result();

    if ($result_check->num_rows > 0) {
        // Department already exists, display an error message
        echo "<script>alert('Department already exists!'); window.location='../view/jobAddition.php';</script>";
        exit();
    } else {
        // Department doesn't exist, proceed with the insertion
        $insert_query = "INSERT INTO department (departmentID, departmentName, departmentManager, departmentEmail) VALUES (?, ?, ?, ?)";
        $stmt = $con->prepare($insert_query);
        $stmt->bind_param("ssss", $departmentID, $departmentName, $departmentManager, $departmentEmail);

        // Execute the statement
        if ($stmt->execute()) {
            echo "<script>alert('New Department addition successful!'); window.location='../view/departmentPages.php';</script>";
            exit();
        } else {
            // If an error occurs, let's output the error message
            echo "Error: " . $stmt->error;
            exit();
        }
    }
}
