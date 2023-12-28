<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="associative.php" method="post">
        <label>Enter a country</label>
        <input type="text" name="country">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php
    $capitals = array("USA"=>"Washington D.C",
                        "Japan"=>"Kyoto",
                        "South Korea"=>"Seoul",
                        "Nigeria"=> "Abuja",
                        "India"=>"New Delhi");
    
    $capital = $capitals[$_POST["country"]];
    echo $capital;




//     $capitals["Japan"] = "Omi-ata";
//     $capitals["China"] = "Beijing";
//     $keys = array_keys($capitals);
//     foreach($keys as $key) {
//         echo "{$key} <br>";
//     }
    
//     $values = array_values($capitals);
//     foreach($values as $value) {
//         echo "{$value} <br> <br>";
//     }

// //$capitals =array_reverse($capitals);
//     echo count($capitals) . "<br>";

//     //key becomes value as they are switched
//     $flip = array_flip($capitals);
//     foreach($flip as $key => $value) {
//         echo "{$key} = {$value} <br> <br>";
//     }

?>