<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userid = $_POST["userid"];
    $password = $_POST["password"];

    $servername = "localhost";
    $username = "root";
    $password ="";
    $dbname = "intern_project";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM logininfo WHERE user_id='$userid' AND password='$password'";
    $result = $conn->query($sql);


    if ($result->num_rows > 0) {
        // User found, start a session and redirect to a welcome page
        session_start();
        $_SESSION['user_id'] = $userid;
        header("Location: dashboar.php");
        exit();
    } else {
        // User not found, show an error message
        echo "Invalid User ID or password";
    }

    $conn->close();
}   
?>

<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        User ID: <input type="text" name="userid"><br><br>
        Password: <input type="password" name="password"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

