<?php

session_start();

        include("connection.php");
        include("functions.php");


        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
        // for post requests
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {
            
            //save to db
            $user_id = random_num(20);
            $query = "insert into users (user_id, user_name, password) values ('$user_id', '$user_name', '$password')";
           
            mysqli_query($con, $query);

            header("Location: login.php");
            
            die;
        }
        else
        {
            echo "Please enter your username and password!";
        }

        }
        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up</title>
</head>
<body>
    <style>
        #text{

height: 25px;
border-radius: 5px;
padding: 4px;
border: solid thin #aaa;
width: 100%;
}

#button{

padding: 10px;
width: 100px;
color: white;
background-color: lightblue;
border: none;
}

#box{

background-color: grey;
margin: auto;
width: 300px;
padding: 20px;
}
    </style>

<div id="box">

    <form action="" method="POST">
        <div style="font-size: 20px; margin: 10px; color: white;">
           Sign Up
        </div>
        <input id="text" type="text" name="user_name"><br><br>
        <input id="text"type="password" name="password"><br><br>
        <input id="button" type="submit" value="Sign Up"><br><br>

        <a href="login.php">Log In</a>
    </form>

</div>

</body>
</html>