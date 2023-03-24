<?php
include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="https://getbootstrap.com/docs/5.3/assets/css/docs.css"
      rel="stylesheet"
    />
    <title>JG corporation</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="progress.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
  </head>
  <body class="p-3 m-0 border-0 bd-example bd-example-row bd-example-row-flex-cols">
    <table class="table table-success table-striped">
      <thead>
<body class="p-3 m-0 border-0 bd-example bd-example-row bd-example-row-flex-cols">
    <table class="table table-success table-striped">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Intern_id</th>
          <th scope="col">Username</th>
          <th scope="col">Role</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <?php
            $query= "SELECT * FROM users"; 



            $result=mysqli_query($conn,$query);
            if(mysqli_num_rows($result) > 0){  
                
              while($row=mysqli_fetch_assoc($result)){
                ?>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['intern_id'];?></td>
                <td><?php echo $row['username'];?></td>
                <td><?php echo $row['role'];?></td>
                <td> <a class="btn btn-primary" href="reset_users.php?id=<?php echo $row['intern_id'];?>" >Reset password</a></td></tr> 
<?php
            }
        }
        
?>
<html>

