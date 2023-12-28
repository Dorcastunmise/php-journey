<?php 
    $temp = 15;
    $cloudy = false;

    if($temp >= 0 && $temp <= 30) {
        echo "Still a good weather". "<br>";
    }
    elseif($temp < 0 || $temp > 30){
        echo "What a bad weather!". "<br>";
    }
    if(!$cloudy) {
        echo "It's sunny". "<br>";
    }
    else {
        echo "It's cloudy". "<br>";
    }

    $age = 18;
    $citizen = true;

    if(!$age >= 18 || !$citizen) {
        echo "You cannot vote". "<br>";
    }
    else {
        echo "You can vote". "<br>";
    }
    
    $child = false;
    $senior = false;
    $ticket = null;

    if($child || $senior) {
        $ticket = 10;
    }
    else {
        $ticket = 15;
    }
    echo "Ticket price will be \${$ticket}";
?>