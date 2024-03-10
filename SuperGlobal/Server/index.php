<?php
    include 'Router.php';
    include 'Home.php';
    include 'Invoice.php';
    include 'Create.php';

        try {
        $router = new Router();

        $router ->get('/',[Home::class, 'index'])
                ->get('/download',[Home::class, 'download'])
                ->register('/invoice',[Invoice::class, 'index'])
                ->get('/invoice/Create',[Invoice::class, 'create'])
                ->post('/upload',[Home::class, 'upload']);


        echo $router->resolve($_SERVER['REQUEST_URL'], strtolower($_SERVER['REQUEST_METHOD']));
        }
        catch(RouteNotFoundException) {
                http_response_code(404);
                echo $e->getMessage();
        }

?>