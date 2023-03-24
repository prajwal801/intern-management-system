<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'intern_project';

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        
        $stmt = $conn->prepare('DELETE FROM task WHERE task_id = ?');
        $stmt->bind_param('i', $id);

        
        if ($stmt->execute()) {
            echo "Deleted successfully!";
        } else {
            echo "Error deleting record: " . $stmt->error;
        }
       
        
        $stmt->close();
    }
    header("Location:http://localhost/dashboar.php");
    exit();
    // Close the connection
    $conn->close();
?>