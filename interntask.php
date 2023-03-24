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
    <title>Task submisson for intern</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<form action="progressquery.php" method="post">
<div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control">
</div>
    <select class="custom-select" style="width:150px;" name="select">
        <option>Doing</option>
        <option>Started</option>
        <option>Finished</option> 
        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
    </select>   
</form>
</html>