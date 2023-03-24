
<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "intern_project";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysqli_error());
        }
        
       
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>task</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Assign new task</h2>
                    </div>
                    <p>Add new task to intern</p>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="form-group">
                    <div class="form-group">
                            <label>id</label>
                            <input type="int" name="id" class="form-control" value="<?php echo $id1=$_GET['id'];?>">
                        </div>
                        <div class="form-group">
                            <label>Task</label>
                            <input type="int" name="info" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" name="task" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Start date</label>
                            <input type="date" name="start" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>End date</label>
                            <input type="date" name="end" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
$id1=$_POST['id'];
$id=$_POST['info'];
$task = $_POST['task'];
$start = $_POST['start'];
$end = $_POST['end'];

    


$sql = "INSERT INTO task (description, task, startdate, enddate, intern_id)
VALUES ('$task', '$id', '$start', '$end', '$id1');

";

if (mysqli_query($conn, $sql)) {
echo "Task assigned successfully!";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Display assigned tasks
$sql = "SELECT * FROM task WHERE task_id = '$id1'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
echo "<h3>Assigned Tasks:</h3>";
echo "<ul>";
while($row = mysqli_fetch_assoc($result)) {
echo "<li>" . $row['task_id'] . "</li>";
}
echo "</ul>";
} else {
echo "No tasks assigned yet.";

header("Location:http://localhost/dashboar.php");
}
}
mysqli_close($conn);
?>







