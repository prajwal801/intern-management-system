
<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "intern_project";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
  if(!$conn){
      die('Could not Connect MySql Server:' .mysqli_error());
    }
$query= "select * from task";
$result=mysqli_query($conn,$query);
if (isset($_POST['submit'])) {  
    $intern_id = $_POST['intern_id'];
    $stmt = mysqli_prepare($conn, "UPDATE task SET progress = progress + 1 WHERE intern_id = ?");
    mysqli_stmt_bind_param($stmt, "i", $intern_id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
  
    // Get progress from database
    $stmt = mysqli_prepare($conn, "SELECT * FROM task WHERE intern_id = ?");
    mysqli_stmt_bind_param($stmt, "i", $intern_id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);
    mysqli_stmt_close($stmt);
  
    $tasks_completed = $row['progress'];
    $target_completion = $row['total_task'];
  
    // Calculate percentage of work completed
    $percentage = round(($tasks_completed / $target_completion) * 100);
  
    // Return percentage as JSON
    echo json_encode(array("percentage" => $percentage));
  
    if ($result) {
      echo "task done!";
    } else {
      echo "Error: " . mysqli_error($conn);
    }
  }
?>







<?php
             $query1= "select * from task";
    

             $result1=mysqli_query($conn,$query1);
            while($row1=mysqli_fetch_assoc($result1)){
              ?>
            <td><?php echo $row1['task_id'];?></td>
           <td><?php echo $row1['name'];?></td>
           <td><?php echo $row1['description'];?></td>
           <td><?php echo $row1['start date'];?></td>
            <td><?php echo $row1['end date'];?></td>
           <td><?php echo $row1['progress'];?></td>
            }?>