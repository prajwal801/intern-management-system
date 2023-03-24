
<?php
// Step 1: Establish a connection to the MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "intern_project";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Step 2: Retrieve the list of employees
$sql1 = "SELECT * FROM task";
$intern_result = mysqli_query($conn, $sql1);

// Step 3: Loop through each employee and display their assigned work
if (mysqli_num_rows($intern_result) > 0) {
    while($intern_row = mysqli_fetch_assoc($intern_result)) {
        $intern_id = $intern_row["task_id"];
         echo $intern_row['task_id'];
         
        
        // Retrieve the assigned work for the current employee
        $sql1 = "SELECT * FROM task WHERE task_id= $intern_id";
        $work_result = mysqli_query($conn, $sql1);
        
        // Loop through the assigned work and display the details
        if (mysqli_num_rows($work_result) > 0) {
            while($work_row = mysqli_fetch_assoc($work_result)) {
                echo "task ID: " . $work_row["task_id"]. " - Description: " . $work_row["description"]. "<br>";
            }
        } else {
            echo "No work assigned for this employee";
        }
        echo "<br>";
    }
} else {
    echo "No employees found";
}

// Step 4: Close the database connection
mysqli_close($conn);
?>