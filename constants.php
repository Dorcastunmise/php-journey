<?php 
/* constants created with const keyword are defined at a compile time*/
const STATUS_PAID = 'paid';
echo STATUS_PAID;

# OR
/*
constants created with define() keyword are defined at a runtime 
define() is  */
define('STATUS_PAYMENT', 'paid');
echo STATUS_PAYMENT;

//to dyna,ically create a constant
$paid = 'DYNAMIC';
define('STATUS_', $paid, 4);
echo STATUS_DYNAMIC; // prints out 4