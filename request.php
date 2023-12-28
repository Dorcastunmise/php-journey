<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="request.php" method="post">
        <label>Username:</label><br>
        <input type="text" name="Username"><br>
        <label>Email:</label><br>
        <input type="text" name="Email"><br>
        <label>Quantity:</label><br>
        <input type="text" name="quantity"><br>
        <input type="submit" value="Total"><br>
    </form>
</body>
</html>
<?php
    $item = "Cucumber";
    $price = 5;
    $quantity = $_POST["quantity"];
    $total = null;
    $total = $quantity * $price;

    echo $_POST["Username"] . "<br>";
    echo "{$_POST["Email"]} <br>";
    echo "You have ordered {$quantity} x {$item}(s)" . "<br>";
    echo "Your total is: \${$total}";
?>