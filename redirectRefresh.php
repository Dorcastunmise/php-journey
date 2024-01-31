<?php 
    session_start();
    if(isset($_POST['guess'])) {
        $guess = $_POST['guess'] + 0;
        $_SESSION['guess'] = $guess;
            if($guess == 42) {
                $_SESSION['message'] = "Great Job";
            } elseif ($guess < 42) {
                $_SESSION['message'] = "Too low";
            } else {
                $_SESSION['message'] = "Too high";
            }
            header('Location: redirectRefresh.php');
            return;
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
    <?php 
        $guess = isset($_SESSION['guess']) ? $_SESSION['guess'] : '';
        $message = isset($_SESSION['message']) ? $_SESSION['message'] : false;
    ?>
    <p>Guessing game</p>
    <?php
        if($message !== false) {
            echo "<p>$message</p>\n";
        }
    ?>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <p><label for="guess">Input Guess</label>
        <input type="text" name="guess" id="guess" size="40"
        <?php echo 'value="' . htmlentities($guess) . '"'; ?>
        ></p>
        <input type="submit">
    </form>

</body>
</html> 