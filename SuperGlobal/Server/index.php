<?php
    include 'Router.php';
    include 'Home.php';
    include 'Invoice.php';
    include 'Create.php';



        $router = new \Router();

        $router ->register('/',[Home::class, 'index'])
                ->register('/invoice',[Invoice::class, 'index'])
                ->register('/invoice/Create',[Invoice::class, 'create']);


        echo $router->resolve($_SERVER['REQUEST_URL']);
?>