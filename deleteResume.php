<?php
// Include the database connection file
include('connection.php');

if (isset($_POST['delete'])) {
    // Get the resume ID to delete
    $resumeID = $_POST['resumeID'];

    // Fetch the resume name from the database
    $fetch_query = "SELECT resumeName FROM resumes WHERE resumeID = ?";
    $stmt = $con->prepare($fetch_query);
    $stmt->bind_param("i", $resumeID);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $resumeName = $row['resumeName'];

        // Delete the resume from the database
        $delete_query = "DELETE FROM resumes WHERE resumeID = ?";
        $stmt = $con->prepare($delete_query);
        $stmt->bind_param("i", $resumeID);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            // Delete the resume file from the server
            $file_path = "../pdf/$resumeName";
            if (file_exists($file_path)) {
                unlink($file_path); // Delete the file
                // echo "<script>alert('Resume deleted successfully.'); window.location='../view/resumePage.php';</script>";
            }
            echo "Resume deleted successfully.";
            header("Location: resumePage.php");
        } else {
            echo "Error deleting resume from the database.";
        }
    } else {
        echo "Resume not found.";
    }
} else {
    echo "Invalid request.";
}
