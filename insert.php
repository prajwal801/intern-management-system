<?php
include_once 'form_insert.php';
if(isset($_POST['submit'])) {
   $name = $_POST['name'];
   $info = $_POST['info'];
   $start = $_POST['start'];
   $end = $_POST['end'];
   $user = $_POST['user'];
   $pass = $_POST['pass'];
   $sql = "INSERT INTO intern (name_intern, internship_info, start_date, end_date) VALUES ('$name', '$info', '$start', '$end')";
   mysqli_query($conn, $sql);
   $new_primary_key = mysqli_insert_id($conn);
   $sql1 = "INSERT INTO users (intern_id, username, password, role) VALUES ('$new_primary_key', '$user', '$pass', 'intern')";
   mysqli_query($conn, $sql1);
   if (mysqli_affected_rows($conn) > 0) {
      echo "New records have been added successfully!";
   } else {
   echo "Error: " . $sql1 . ":-" . mysqli_error($conn);
 }
    mysqli_close($conn);
}
header("Location:http://localhost/index.php");
?>