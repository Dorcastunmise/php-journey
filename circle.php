<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="circle.php" method="post">
        <label>Radius:</label>
        <input type="text" name="radius">
        <input type="submit" value="calculate">
    </form><br>
</body>
</html>
<?php 
    $radius = $_POST["radius"];
    $circumference = null;
    $area = null;
    $volume = null;
    $circumference = 2 * pi() * $radius;
    $circumference = round($circumference, 2); //Rounds the output to the 2nd decimal point
   
    $area = pi() * pow($radius, 2);
    $area = round($area, 2);

    $volume = 4/3 * pi() * pow($radius, 3);
    $volume = round($volume, 2);
    echo "The circumference of such circle should be: {$circumference}cm" . "<br>";
    echo "The area of the circle is: {$area}cm^2" . "<br>";
    echo "Volume of circle is: {$volume}cm^3" . "<br>";
?>