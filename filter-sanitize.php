<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="filter-sanitize.php" method="post">
        Username: <br>
        <input type="text" name="username"><br>
        Age: <br>
        <input type="text" name="age"><br>
        Email: <br>
        <input type="text" name="email"><br><br>
        <input type="submit" name="login" value="Login"><br><br>
    </form>
</body>
</html>
<?php
    if(isset($_POST["login"])){
        $username = filter_input(INPUT_POST, "username",
                                FILTER_SANITIZE_SPECIAL_CHARS);
        $age = filter_input(INPUT_POST, "age",
                            FILTER_SANITIZE_NUMBER_INT);
        $email = filter_input(INPUT_POST, "email",
                            FILTER_SANITIZE_EMAIL);
        echo "Hello: {$username}";
        echo "Hello: {$age}";
        echo "Hello: {$email}";
    }
?>