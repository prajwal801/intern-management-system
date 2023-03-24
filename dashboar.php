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
        <tr>
          <th scope="col"></th>
          <th scope="col">Name</th>
          <th scope="col">Internship type</th>
          <th scope="col">Start date</th>
          <th scope="col">End date</th>
          <th scope="col">Progress</th>
          <th scope="col"> Task completed/Totaltask</th>
          <th scope="col">Filtering</th>
          <th scope="col"></th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <?php
            $query= "SELECT * FROM intern"; 



            $result=mysqli_query($conn,$query);
            if(mysqli_num_rows($result) > 0){  
              while($row=mysqli_fetch_assoc($result)){
                $temp_id = $row['intern_id'];
                $query2 = "SELECT COUNT(task_id) from task where task.intern_id = '$temp_id'";
                $result2=mysqli_query($conn,$query2);
                
                if (mysqli_num_rows($result2) > 0) {
                  $tasks = mysqli_fetch_array($result2)[0];
                }else
                {
                  $tasks = 0;
                }
                $query3 = "SELECT task_status from task where task.intern_id = '$temp_id'";
                $done = 0;
              
                $result3=mysqli_query($conn,$query3);
                while($row3=mysqli_fetch_assoc($result3)){
                  if ($row3['task_status'] == 'Finished'){
                    $done = $done+1;
                  }
                }
                if ($tasks > 0) {
                  $percent =round(($done / $tasks) * 100);
                 } else {
                   $percent = 0;
                   
                 }
                
          ?>
                <td><?php echo $row['intern_id'];?></td>
                <td><?php echo $row['name_intern'];?></td>
                <td><?php echo $row['internship_info'];?></td>
                <td><?php echo $row['start_date'];?></td>
                <td><?php echo $row['end_date'];?></td>
                <td><?php echo '<div class="progress"><div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: '.$percent.'%" aria-valuenow="'.$percent.'" aria-valuemin="0" aria-valuemax="100">'.$percent.'%</div></div>';?></td>
                <td><?php echo $done;?>/<?php echo $tasks;?></td>
                
                <td> <a class="btn btn-primary" href="new.php?id=<?php echo $row['intern_id'];?>">Details</a></td>            
                <td><div class="container">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal<?php echo $row['intern_id'];?>" name="id"> Edit</button>
                  <?php include 'edit_modal.php'; ?>
                </td>
                <td> <a class="btn btn-primary" href="delete.php?id=<?php echo $row['intern_id'];?>" Onclick=" return confirm(' Are you sure you want to delete this intern')">Delete</a></td> 
              </tr>
          <?php
              }
            }
          ?>
      </tbody>
    </table>
    <script>
      $(document).ready(function() {
      // Handle the button click event
      $('button[data-target="#editModal"]').click(function() {
        // Get the intern_id value from the button
        var intern_id = $(this).data('intern-id');

        // Make an AJAX request to
    </script>
    <script>
      setInterval(function(){
        var intern_id=1;
        $.post("task.php",{intern_id: intern_id}, function(data){
        $(".progress-bar").css("width", data.percentage+ "%");
        $(".progress-bar").attr("aria-valuenow", data.percentage);
        },"json");
      }
  </script>
  </body>
</html>