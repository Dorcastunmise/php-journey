<!--
    If an application does not send any data, 
    it can send a special header as part of HTTP response.
    Redirect header includes a URL that the browser is 
    supposed to forward itself to.
    It was originally used for website that moved 
    from one URL to another.
-->
<!-- Model view -->
<?php 
    session_start();
        if(isset($_POST['where'])) {
            if($_POST['where'] == '1') {
                header("Location: locationHeaderCode.php");
                return;
            } elseif($_POST['where'] == '2') {
                header("Location: redir2.php?parm=123.php");
                return;
            } else {
                header("Location: https://www.dr-chuck.com/");
                return;
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
    <p>Yo!</p>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        <p>
            <label for="inp9">Where to go? (1-3)</label>
            <input type="text" name="where" id="inp9" size="5">
            <input type="submit">
        </p>
    </form>
</body>
</html>