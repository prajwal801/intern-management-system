<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "intern_project";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysqli_error());
        }
    $query= "select * from intern";
    $result=mysqli_query($conn,$query);
?>