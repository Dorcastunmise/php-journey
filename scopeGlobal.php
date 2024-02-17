<?php $x = 5;
function foo() {
    global $x;
    // $x = 10;
    return $x;
}
foo();
echo $x;

// or 
function goo() {
    $GLOBALS['x'] = 10;
    $GLOBALS['x'];
    return $GLOBALS['x']; // not promoted to be used, it makescode unreadable, intorduces more bugs
}
goo();
echo $x;