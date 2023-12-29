<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_SERVER</title>
</head>
<body>
    <!--htmlspecialchars is used to avoid cross-site scripts-->
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        
        <label>Username:</label>
        <input type="text" name="username">
        <input type="submit">
    </form>
</body>
</html>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "Hallo";
    }

?>