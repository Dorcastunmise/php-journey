<?php
    setcookie("fav_food", "pizza", time() +(86400 * 2), "/"); //86400 secs = 24hrs
    setcookie("language", "PHP", time() + (86400 * 3), "/");
    setcookie("Coursera", "saved application", time() + (86400 * 4), "/");

    //to delete a cookie use subtraction instead of addition
    setcookie("fav_food", "pizza", time() - (86400 * 2), "/");
    //or as
    // setcookie("fav_food", "pizza", time() - 0, "/")

    foreach($_COOKIE as $key=>$value) {
        echo " {$key} = {$value} <br>";
    }
    if(isset($_COOKIE["fav_food"])) {
        echo "Buy some {$COOKIE["fav_food"]} !!";
    }else {
        echo "Favourite food is unknown";
    }

?>