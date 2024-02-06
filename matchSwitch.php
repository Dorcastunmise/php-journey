<?php 

$paymentStatus = 1;
switch($paymentStatus) :
    case 1: 
        echo 'Paid';
        break;
    case 2: 
    case 3:
        echo 'Payment declined';
        break;
    case 0: 
        echo 'Pending payment';
        break;
    default: 
        echo 'Unknown payment status';
endswitch;

# match
$paymentStatusDisplay = match ($paymentStatus) {
    1 => 'Paid',
    2, 3 => 'Payment Declined',
    default => 'Unknown payment status',
};
echo $paymentStatusDisplay;