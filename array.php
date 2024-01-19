<?php 
    //indexed 
    $foods = array("apple", "orange", "banana", "coconut");
    /* can also be created as
        $foods = ["apple", "orange", "banana", "coconut"];
    */

    array_push($foods, "pineapple", "avocado");
    // array_pop($foods);
    // array_shift($foods);
    // $foods =array_reverse($foods);
    echo "There are " . count($foods). " fruits available rn". "<br>";


    foreach($foods as $food) {
        echo $food . "<br>";
    }

    # -------------------
    #echo will expect a string that can be given as an output
    $ages = [10, 20, 30, 40, 50];
    # due to input being numbers, print_r is used
    print_r($ages) . "<br>"; #print_r stands for print readable
    echo count($ages) . "<br>";
    array_push($ages, 34, 2,'3', 5, 73);
    print_r($ages) . "<br>";
    echo count($ages) . "<br>";

    $collatedAges = array_merge($foods, $ages);
    print_r($collatedAges) . "<br>";
    // associative
    $ninjaOne = [
        'shawn' => 'white',
        'Matt' => 'black', 
        'Luisiana' => 'orange', 
        'Captain' => 'black'
    ];
    echo $ninjaOne['Luisiana']. "<br>";
    $ninjaOne['Luisiana'] = 'white';
    echo $ninjaOne['Luisiana']. "<br>";
    echo count($ninjaOne). "<br>";

    // multidimensional - arrays within an array
    $blogs = [
        ['name' => 'Linda Ikeji', 'advertisement' => '12,000,000', 'Founded' => 2003],
        ['name' => 'Stella Dimokokorkus', 'advertisement' => '30,000', 'Founded' => 2005],
        ['name' => 'Upcoming', 'advertisement' => '15,000', 'Founded' => 2023]
    ];
    print_r($blogs). "<br>";
    echo $blogs[1]['Founded']. "<br>";
    echo count($blogs) . "<br>";
    $blogs[] = ['name' => 'Shakirat', 'advertisement' => '50,000', 'Founded' => 2020];
    print_r($blogs[3]) . '<br>';
    array_push($blogs, ['name' => 'Bassey', 'advertisement' => '66,000', 'Founded' => 2019]);
    print_r($blogs[4]) . '<br>';

    $popping = array_pop($blogs);
    print_r($blogs) . '<br>';


?>