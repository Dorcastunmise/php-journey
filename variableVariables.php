<?php
# to create variables dynamically 
$foo = 'bar';
#the value of $foo becomes a variale with new 
$$foo = 'new';
#prints barnew
echo  $foo, $bar; # or echo "$foo, ${$$foo}"
