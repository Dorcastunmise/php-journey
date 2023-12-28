<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="while.php" method="post">
        <input type="submit" value="Stop">
    </form>
</body>
</html><?php
    $seconds = 0;
    $running = true;

    while($running) {
        if(isset($_POST["Stop"])) {
            $running = false;
        }
        else {$seconds++;
            echo $seconds . "<br>";
        }
    }
?>