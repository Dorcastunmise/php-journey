<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="math-functions.php" method="post">
        <label>x:</label><br>
        <input type="text" name="x"><br>
        <label>y:</label><br>
        <input type="text" name="y"><br>
        <label>z:</label><br>
        <input type="text" name="z"><br>
        <input type="submit" value="Total">
    </form>
</body>
</html>
<?php 
    $x = $_POST["x"];
    $y = $_POST["y"];
    $y = $_POST["z"];
    $total = null;
    //$total = abs($x); gives absolute integer
    // $total = round($x); rounds the number to the nearest
    // $total = floor($x); rounds down always
    // $total = ceil($x); always round the number up
    // $total = sqrt($x); square root of x
    // $total = pow($x, $y); x to the power of y
    // $total = max($x, $y, $z) highest number out of the three
    // $total = min($x, $y, $z) lowest number out of the three
    // $total = pi(); prints 3.1415926535898
    // $total = rand(1, 6); prints random number between 1 & 6
    echo $total;
?>
