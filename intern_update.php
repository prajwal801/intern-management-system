<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "intern_project";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
$id1 = isset($_POST['id']) ? $_POST['id'] : $_GET['id'];

if(!$conn){
    die('Could not Connect MySql Server:' .mysqli_error());
}
if(isset($_POST['submit']))
{
    $id1 = $_POST['id'];
    $select = $_POST['select'];
    $sql = "UPDATE task SET task_status = '$select' WHERE task_id = '$id1'";
    if (mysqli_query($conn, $sql)) {
        echo "Task status has been updated successfully !";
    } else {
    echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?><!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><title>Task submission for intern</title><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"><style type="text/css">
    .wrapper{
            width: 500px;
            margin: 0 auto;
        }</style></head><body>
            <div class="wrapper">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <input type="hidden" name="id" value="<?php echo $id1; ?>">
                <select class="custom-select" style="width:150px;" name="select">
                <option>Doing</option><option>Started</option><option>Finished</option>
            </select> 
            <input type="submit" class="btn btn-primary" name="submit" value="Submit"></form>
        </div>
    </body>
    </html>