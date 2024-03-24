<?php
    $dbhost = 'localhost';
    $dbname = 'misc';
    $dbuser = 'oluwatunmise';
    $dbpass = '';

    try{
        $conn = new PDO("mysql:host=$dbhost;dbname=$dbname","$dbuser","$dbpass");
    } catch(PDOException $err) {
        echo 'Database connection issue. ' . $err->getMessage();
        exit();
    }
?>