<?php
    /* define() is used to create constants and assign a 
    value to those constants. e.g
    define('CONSTANT NAME', 'value');    
    
    */
    define('HOST', 'localhost');
    define('DB_NAME','dev_db');
    echo 'Hallo'. '<br>'. '<br>';

    /* To view entire content of a multi-dimensional array
     use json_encode  
    */
    $people = array(
        array(
            'first_name'=>'Sunam',
            'last_name'=>'Mackar',
            'email'=>'Sunam@gmail.com',
        ),
        array(
            'first_name'=>'Del Rio',
            'last_name'=>'Salome',
            'email'=>'Del@yahoo.com',
        ),
        array(
            'first_name'=>'Mcfederick-Gin',
            'last_name'=>'Prisca',
            'email'=>'Federick@gmail.com',
        )
    );
    echo var_dump(json_encode($people)) . '<br>'. '<br>';

    $posts      = ['First post'];
    $fisrtPost  = $posts[0] ?? null;
    echo $fisrtPost . '<br>'. '<br>';

    # 0 will be included in the output
    for($x = 0; $x <= 10; $x++) echo $x;

    echo '<br> <br>';
    $y = 1;
    while($y <= 15) {echo 'Number:  ' . $y . '<br>'; $y++;}

    echo '<br> <br>';

    $section = ['firstpost', 'second page', 'third timeline'];
    for($z = 0; $z < count($section); $z++) echo $section[$z] . '<br>';
    
    echo '<br>';

    foreach($section as $phase) echo $phase. '<br>';
    #or
    foreach($section as $index => $phase) {
        echo $index + 1 . ' - ' . $phase . '<br>';
    }

    echo '<br><br>';

    $peopletown = array(
        'first_name'=>'Sunam',
        'last_name'=>'Mackar',
        'email'=>'Sunam@gmail.com',
    );
    foreach($peopletown as $key=>$person) {
        echo "$key - $person<br>";
    }

    echo '<br><br>';

    $fruits = ['pear', 'apple', 'mango'];
    var_dump(in_array('mango', $fruits));

    echo '<br><br>';
?>

