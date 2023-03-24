<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "intern_project";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
  if(!$conn){
	  die('Could not Connect MySql Server:' .mysqli_error());
	}
	
	$id =$_GET['id'];
	$query=mysqli_query($conn,"select * from `intern` where intern_id='$id'");
	$row=mysqli_fetch_array($query);
?>

<html>

	<h2>Edit</h2>
	<form method="POST" action="update.php?id=<?php echo $id;?>">
	<label>name</label><input type="text" value="<?php echo $row['name'];?>" name="name">
	<label>name</label><input type="text" value="<?php echo $row['task_assigned'];?>" name="task">
	<label>name</label><input type="text" value="<?php echo $row['internship_info'];?>" name="info">
	<label>name</label><input type="date" value="<?php echo $row['startdate'];?>" name="start">
	<label>name</label><input type="date" value="<?php echo $row['enddate'];?>" name="end">
</div>
</html>

