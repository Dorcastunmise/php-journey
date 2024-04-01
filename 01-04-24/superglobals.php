<?php     
    /* GET can be used for both url & forms where security 
    is not key e.g seraching of values while 
    post for only forms
    */
    if(isset($_POST['submit'])) {
        echo $_POST['name'];
        echo $_POST['age'];
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
    <li>Host port: <?php echo $_SERVER['SERVER_PORT'];?></li>
    <li>Remote port: <?php echo $_SERVER['REMOTE_PORT'];?></li>

    <a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=John&age=30">
    Click
    </a>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div>
            <label for="name">Name: </label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="age">Age: </label>
            <input type="text" name="age">
        </div> <br>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>