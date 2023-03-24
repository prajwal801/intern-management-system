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
    

    if (isset($_POST['submit']))
    {

        $id = $_POST['taskid'];
     
     $task = $_POST['task'];
     $dec = $_POST['dec'];
     $start = $_POST['start'];
     $end = $_POST['end'];
    $sql= "UPDATE `task` SET `task`='$task',`description`='$dec',`startdate`='$start',`enddate`='$end' WHERE task_id='$id'";

     if (mysqli_query($conn, $sql)) {
        echo "New record has been updated successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
      
        
        
    }
    
    // Close the connection
    $conn->close();
?>