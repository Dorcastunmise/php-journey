<<<<<<< HEAD
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
=======
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
>>>>>>> 693c0a508b30295dc1dafd09b0823d8b4d7b82b5
echo STATUS_DYNAMIC; // prints out 4