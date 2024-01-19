<?php $name = 'Mario';
function sayHallo() {
    global $name; #to make it a global $name variable
    $name = 'yoshi';
    echo 'hallo $name';
}
sayHallo();
echo $name;

function sayBye(&$name) { # to enable the global $name get updated as well
    $name = 'wario';
}
sayBye($name);
echo '<br>' . $name;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>