<?php
// Include the database connection file
include('../settings/connection.php');

function getCandidateById($candidateId)
{
    global $con;

    // Prepare the SELECT query
    $select_query = "SELECT * FROM candidates WHERE candidateID = ?";

    // Prepare and bind parameters
    $stmt = $con->prepare($select_query);
    $stmt->bind_param("i", $candidateId);

    // Execute the statement
    if ($stmt->execute()) {
        // Check if any record was returned
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            // Fetch and return the candidate details
            return $result->fetch_assoc();
        } else {
            return null; // No record found
        }
    } else {
        return null; // Error executing query
    }
}
