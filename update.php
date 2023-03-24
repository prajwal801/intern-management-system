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
        $id = $_POST['internid'];
        $id1 = $_POST['taskid'];
     
     $name = $_POST['name'];
     $info = $_POST['info'];
     $start = $_POST['start'];
     $end = $_POST['end'];
     $sql = "UPDATE intern LEFT JOIN task ON intern.intern_id = task.intern_id SET intern.name_intern = '$name', intern.internship_info = '$info', intern.start_date = '$start', intern.end_date = '$end', task.task = '$task' WHERE intern.intern_id = '$id' ";
    

     if (mysqli_query($conn, $sql)) {
        echo "New record has been updated successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
      
        
        
    }
    header("Location:http://localhost/dashboar.php");
    exit();
    // Close the connection
    $conn->close();
?>