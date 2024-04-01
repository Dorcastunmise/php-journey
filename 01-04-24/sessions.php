<?php 

    session_start();
    if(isset($_POST['submit'])) {
        $username = filter_input(INPUT_POST, 'username',
                    FILTER_SANITIZE_SPECIAL_CHARS);
        $password = $_POST['password'];

        if($username == 'Elodie' && $password == 'password') {
            $_SESSION['username']   = $username;
            header('Location: ./extras/dashboard.php');
        } else {
            echo 'incorrect login';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']); ?>" method="POST">
        <div>
            <label for="username">Username: </label>
            <input type="text" name="username">
        </div> <br>
        <div>
            <label for="password">Password: </label>
            <input type="text" name="password">
        </div> <br>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>