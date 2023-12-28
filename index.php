<?php
    $intro = "I'm Oluwatunmise";
    $quantity = 22;
    $price = 15.32;
    $employed = true;
    $double = 3;
    $total = null;


    echo "Hallo,";
    echo " {$intro}. <br>";
    echo "Presently working on producing {$quantity} web products.<br>";
    echo "I'll need \${$price} in total for the development and all.<br>";
    echo "Employment status: {$employed}<br>";
    echo "If the company orders multiple, then, the total will be doubled to ";
    
    $total = $double * $price;
    echo "\${$total}";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- <body>
    <h1>Hallo</h1>
</body> -->
</html>