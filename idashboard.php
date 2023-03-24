<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "intern_project";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:');
        }
        $intern_id=$_GET['id'];
   
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <body>
    
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
    <title>JG CORPORATION</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="progress.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      </script>
      <?php
      $query3= "SELECT name_intern FROM intern WHERE '$intern_id' =intern_id"; 
      $result3=mysqli_query($conn,$query3);
     
    
        if(mysqli_num_rows($result3) > 0){   
            while($row3=mysqli_fetch_assoc($result3)){
      ?>
      <!DOCTYPE html>
      <html lang="en">
        <head>
        <meta charset="UTF-8">
        <title>Welcome</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-C87cbB4vd3qV7l4J6x/Zrt6aH2Q01s9ukUyT6dGik6LswzYwZeyfNX+J1mBYE98H0yBvqxg8p/qOoxlJch+eQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        </head>
        <body>
          <div class="container my-5">
            <div class="jumbotron text-center">
            <h3 class="display-4">Welcome to  JG CORPORATION  <?php echo $row3['name_intern'];?></h3>
            <p class="lead">We're excited to have you here. Take a look around your project .</p>
            <hr class="my-4">
            <p>If you have any questions or comments, don't hesitate to contact us.</p>
          </div>
        </div>
        <!-- Bootstrap JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js" integrity="sha512-bnFbZIq3L4l4txuV7QlT6Uy9sIt2x6xuV6AjqL+UZVNGgKzB02ZKfzYOS/TjI4v4ne4IOwLJdC7RKrrkX9uFlg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        </body>
      </html>
      
      
      
      <?php
        }
        }
?>
      <table class="table">
    <table class="table table-success table-striped">
    <thead>
        <tr>
          <th scope="col"></th>
          <th scope="col">Task assigned</th>
          <th scope="col">Description</th>
          <th scope="col">Start date</th>
          <th scope="col">End date</th>
          <th scope="col">task_status</th>
          <th scope="col">Update</th>
         

         
        </tr>
      </thead>
      <tbody>
        <tr>
        
            <?php 
  
  $query= "SELECT * FROM task WHERE intern_id='$intern_id'";
   $result=mysqli_query($conn,$query);
   if(mysqli_num_rows($result) > 0){
   while($row=mysqli_fetch_assoc($result)){
   ?><tr>
    <td><?php echo $row['task_id'];?></td>
  <td><?php echo $row['task'];?></td>
  <td><?php echo $row['description'];?></td>
  <td><?php echo $row['startdate'];?></td>
  <td><?php echo $row['enddate'];?></td>
  <td><?php echo $row['task_status'];?></td>
  <td> <a class="btn btn-primary" href="intern_update.php?id=<?php echo $row['task_id'];?>">Update task</a></td>   
</tr>
  <?php

   ?>

    </div>
</td>
</th>

    </button>

   


          </tr>
          
          
          <?php
            }
          }
        
            ?>
           
          
        </tr>
      </tbody>
    </table
 
</body>
</html>