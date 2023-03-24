
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
<script>
// capture form submission
$("#myForm").submit(function(event) {
 event.preventDefault(); // prevent default form submission
 $.ajax({
 type: "POST",
 url: "insert.php", // first action URL
 data: $(this).serialize(), // form data
 success: function(data) {
 console.log(data); // log response
 $.ajax({
 type: "POST",
 url: "idashboard.php", // second action URL
 data: $(this).serialize(), // form data
 success: function(data) {
 console.log(data); // log response
 }
 });
 }
});
});</script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create intern</title>
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
                        <h2>Add new intern</h2>
                    </div>
                    <p>Please fill this form and submit to add intern record.</p>
                    <form action="insert.php" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="int" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Internship info</label>
                            <input type="int" name="info" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Start date</label>
                            <input type="date" name="start" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>End date</label>
                            <input type="date" name="end" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="user" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" name="pass" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
