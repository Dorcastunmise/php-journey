<?php
    $password = "pass123";
    $hash = password_hash($password, PASSWORD_DEFAULT);
    if(password_verify("pass123", $hash)) {
        echo "You are logged in";
    }else{
        echo "Incorrect Password";
    }
?>