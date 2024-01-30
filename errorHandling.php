<?php
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    try{
        $stmt = $pdo->prepare("SELECT * FROM users WHERE user_id = :xyz");
        $stmt->execute(array(":pizza" => $_GET['user_id']));
    }
    catch(EXCEPTION $ex){
        echo("Internal error, please contact support"); #this will be displayed to the user
        error_log("error4.php, SQL error=".$ex->getMessage()); # the error log will go to the log for developers
        return;
    }
    $row = $stmt->fetch($PDO::FETCH_ASSOC);
?>  