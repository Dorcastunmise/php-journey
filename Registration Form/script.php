<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $studentname  = $_POST["student"];
    $grade        = $_POST["grade"];
    $session      = $_POST["session"];
    $tutor        = $_POST["tutor"];

    echo "<h3>Student Info</h3>";
    $str = <<<EOD
      $studentname |$grade |$session |$tutor </br>
    EOD;
    echo $str; 

    $students   = array("Name"=>$studentname,"Grade"=>$grade,"Session"=>$session,"Class Teacher"=>$tutor);
    foreach($students as $key=>$value) {
        echo $key . " : " . $value . "</br>";
    }
    $choc       =  array("peanut","walnut", "strawberry");
    $customer   = array("Abide", "Amfe","Roy");
    $newArray   = $choc + $customer;
    foreach($newArray as $ele) {
        echo $ele . "<br>";
    }
    ?>
</body>
</html>