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
    $id1=$_GET['id'];
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
                            
                        </div>
                        <p> Reset password</p>
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <div class="form-group">
                        <div class="form-group">
                                <label>Intern_id</label>
                                <input type="text" name="id" class="form-control" value="<?php echo $id1=$_GET['id'];?>">
                        </div>
                        <div class="form-group">
                                <label> New Password</label>
                                <input type="text" name="pass" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">

                    </div>
                </div>
            </div>
        </div> 
        </form>
        </body>
    <?php
    if (isset($_POST['submit'])) {
        $id1=$_POST['id'];
        $pass=$_POST['pass'];
        $sql = "UPDATE users SET password = '$pass' WHERE intern_id = '$id1'";
    if (mysqli_query($conn, $sql)) {
        echo "Task status has been updated successfully !";
    } else {
    echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
  // Close the connection
  $conn->close();  
  header("Location:http://localhost/usersdetails.php");


}

   
?>