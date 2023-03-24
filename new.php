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
    <title>JG corporation</title>
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
      <center><h1> Intern name :<?php echo $row3['name_intern'];?> </h1></center>
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
          <th scope="col">Task status</th>
          <th scope="col"></th>
          <th scope="col"></th>
         

         
        </tr>
      </thead>
      <tbody>
        <tr>
  <a class="btn btn-primary" href="assigntask.php?id=<?php echo $intern_id;?>">Assigntask</a>
  <?php
    $query= "SELECT * FROM task WHERE '$intern_id' =intern_id";  
    $result=mysqli_query($conn,$query);
     
    
        if(mysqli_num_rows($result) > 0){   
            while($row=mysqli_fetch_assoc($result))
            {

            
           ?> 
           <td><?php echo $row['task_id'];?></td>
           <td><?php echo $row['task'];?></td>
           <td><?php echo $row['description'];?></td>
           <td><?php echo $row['startdate'];?></td>
           <td><?php echo $row['enddate'];?></td>
           <td><?php echo $row['task_status'];?></td>
     
          <td> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal<?php echo $row['task_id'];?>" name="id"> Edit</button>
                  <?php include 'edit_modaltask.php'; ?></td>
           <td> <a class="btn btn-primary" href="delete_task.php?id=<?php echo $row['task_id'];?>" Onclick=" return confirm(' Are you sure you want to delete this task')">Delete</a></td> 

           
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
        </table>
 
</body>
</html>

