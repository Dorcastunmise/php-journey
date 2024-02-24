<?php
//Autoloader removes the need to require or include classes files 

spl_autoload_register(
    function ($path) {
        $path = __DIR__ . '/../' . lcfirst(str_replace('\\', '/', $path)) . 'path';
        if (file_exists($path)) {
            require $path;
        }
    }
)

$paddleTransaction = new Transaction;
var_dump($paddleTransaction);
?>