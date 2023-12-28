<?php 
    $foods = array("apple", "orange", "banana", "coconut");
    array_push($foods, "pineapple", "avocado");
    // array_pop($foods);
    // array_shift($foods);
    // $foods =array_reverse($foods);
    echo "There are " . count($foods). " fruits available rn". "<br>";


    foreach($foods as $food) {
        echo $food . "<br>";
    }
?>