<?php
// Check if the delete parameter is set in the URL
if (isset($_GET['delete'])) {
    // Include your database connection code here
    include '../database.php';

    // Get the user ID from the URL parameter
    $userId = $_GET['delete'];

    // Prepare the SQL statement to delete the user
    $query_delete = "DELETE FROM users WHERE iduser = $userId";

    // Run the delete query
    $run_query_delete = mysqli_query($conn, $query_delete);

    // Check if the deletion was successful
    if ($run_query_delete) {
        echo 'Data berhasil dihapus.';
        header("Location: users.php");
        exit();
    } else {
        echo 'Error: ' . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>