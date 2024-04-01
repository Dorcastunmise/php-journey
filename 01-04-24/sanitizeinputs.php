<?php     
    /* GET can be used for both url & forms where security 
    is not key e.g seraching of values while 
    post for only forms
    */
    if(isset($_POST['submit'])) {
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
        $age  = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);
        $task = filter_var($_POST['task'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        echo    "$name is $age today. Her scheduled task is $task" . "<br>" . "<br>";
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
            <label for="name">Name: </label>
            <input type="text" name="name">
        </div> <br>
        <div>
            <label for="age">Age: </label>
            <input type="text" name="age">
        </div> <br>
        <div>
            <label for="task">Task: </label>
            <input type="text" name="task">
        </div> <br>
        <input type="submit" value="Submit" name="submit">
    </form>
</body>
</html>