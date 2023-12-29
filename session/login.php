<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="login.php" method="post">
        Username: <br>
        <input type="text" name="username"><br>
        Password: <br>
        <input type="password" name="password"><br><br>
        <input type="submit" name="login" value="Login"><br><br>
    </form>
</body>
</html>
<?php
    if(isset($_POST["login"])) {
        $username = filter_input(INPUT_POST, "username",
                                FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password",
                                FILTER_SANITIZE_ENCODED);
        $_SESSION["{$username}"] = "username";
        $_SESSION["{$password}"] = "password";

        if(!empty($_POST["username"]) && !empty($_POST["username"]) ) {
            $_SESSION["{$username}"] = "username";
            $_SESSION["{$password}"] = "password";

            $_SESSION["{$username}"] = "username";
            $_SESSION["{$password}"] = "password";

            header("Location: home.php");
        }
        else{
            echo "Missing username/password";
        }
    }

?>