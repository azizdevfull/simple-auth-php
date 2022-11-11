<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Auth</title>
</head>
<body>
    <a href="logout.php">Log Out</a>
    <h1> Hello <?php echo $user_data['user_name']; ?></h1>
    <br>
   
</body>
</html>