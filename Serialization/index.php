<?php
    include 'serialization.php';

    $invoice = new Invoice(25, 'Invoice 1', '123456789123456');
    $str = serialize($invoice);
    echo $str;
?>