<?php

session_start();

        include("connect.php");
        include("functions.php");
        
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