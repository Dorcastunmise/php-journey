<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="isset-empty.php" method="post">
        <label>Username:</label>
        <input type="text" name="username"><br><br>
        <label>Password:</label>
        <input type="password" name="password" id=""><br>
        <input type="submit" value="Login" name="login">
    </form>
</body>
</html>


<?php

    // foreach($_POST as $key => $value) {
    //     echo "{$key} = {$value} <br>";
    // }

    if(isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
  
        if(empty($username)) {
            echo "Username is missing";
        }
        elseif(empty("password")){
            echo "Password is needed";
        }
        else{
            echo "Hello {$username} ";
        } 
    }
?>