<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!--POST requests mordify or adds data while GET requests view data-->
    <form action="validation.php" method="post">
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
    if(isset($_POST["login"])) { 
        //validation test
        $age = filter_input(INPUT_POST, "age",
                            FILTER_VALIDATE_INT);
        $email = filter_input(INPUT_POST, "email",
                        FILTER_VALIDATE_EMAIL);
                if(empty($age)) {
                    echo "Invalid number";
                }else {
                    echo "You are $age years old";
                }
    }
?>