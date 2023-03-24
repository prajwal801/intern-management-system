<?php
include_once 'intern_update.php';
$id = $_GET['id'];
if(isset($_POST['submit']))
{    
   

    $select = $_POST['select'];

     $sql = "INSERT INTO task (task_status)
     VALUES ('$select') WHERE intern_id ='$id'";
     $result = mysqli_query($conn,"SELECT * FROM task");


     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     
}
 //header("Location:http://localhost/dashboar.php");
     exit();
     mysqli_close($conn);
?>
