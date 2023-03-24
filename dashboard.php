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
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


  </head>
  <body
    class="p-3 m-0 border-0 bd-example bd-example-row bd-example-row-flex-cols"
  >
  <button onclick="window.location.href = 'form_insert.php';" class="btn btn-primary btn-lg"> Add new intern+ </button>
    <table class="table">
    <table class="table table-success table-striped">
 

      <thead>
        <tr>
          <th scope="col"></th>
          <th scope="col">Name</th>
          <th scope="col">Internship type</th>
          <th scope="col">Task assigned</th>
          <th scope="col">Start date</th>
          <th scope="col">End date</th>
          <th scope="col">Progress</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1
          </th>
          <td>Sameer</td>
          <td>Long term </td>
          <td>learn php</td>
          <td>2023-02-12</td>
          <td>2023-02-15</td>
          
         <td><div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar" style="width: 75%">75%</div>
  </div></td>
          </td>
        </div>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Priya</td>
          <td>short term</td>
          <td> learn html</td>
          <td>2023-02-12</td>
          <td>2023-02-15</td>
          <td><div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar" style="width: 25%">25%</div>
          <tr>
            <?php
            while($row=mysqli_fetch_assoc($result))
            {

            
           ?> 
           <td><?php echo $row['intern_id'];?></td>
           <td><?php echo $row['name'];?></td>
           <td><?php echo $row['internship_info'];?></td>
           <td><?php echo $row['task_assigned'];?></td>
           <td><?php echo $row['startdate'];?></td>
           <td><?php echo $row['enddate'];?></td>
           <td><a href="edit.php?id=<?php echo $row['intern_id'];?>">Edit</a></td>
           <td><a href="delete.php?id=<?php echo $row['intern_id'];?>">Delete</a></td>
           
           
          </tr>
          
          <?php
            }
            ?>
           
          
        </tr>
      </tbody>
    </table
    </table>
 <button class="btn btn-success" data-toggle="modal" data-target="#MyModal">Launch Modal</button>     
<div class="modal align-middle" id="MyModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
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
            <h2>Edit</h2>
	<form method="POST" action="update.php?id=<?php echo $id;?>">
	<label>name</label><input type="text" value="<?php echo $row['name'];?>" name="name">
	<label>name</label><input type="text" value="<?php echo $row['task_assigned'];?>" name="task">
	<label>name</label><input type="text" value="<?php echo $row['internship_info'];?>" name="info">
	<label>name</label><input type="date" value="<?php echo $row['startdate'];?>" name="start">
	<label>name</label><input type="date" value="<?php echo $row['enddate'];?>" name="end">
                <button class="btn btn-info" data-dismiss="modal">Close</button>
            </div>                
        </div>
    </div>
</div>
  </body>
</html>
