<<<<<<< HEAD
<?php
# Heredoc : treats strings as if it were in double quotes and allows variables
$text = <<<TEXT
    Hello World
TEXT;

var_dump($text);
echo nl2br($text);

# Nowdoc
$text = <<<'TEXT'
line 1
line 2
line 3 ' "
TEXT;
echo '<br/>';
=======
<?php
# Heredoc : treats strings as if it were in double quotes and allows variables
$text = <<<TEXT
    Hello World
TEXT;

var_dump($text);
echo nl2br($text);

# Nowdoc
$text = <<<'TEXT'
line 1
line 2
line 3 ' "
TEXT;
echo '<br/>';
>>>>>>> 693c0a508b30295dc1dafd09b0823d8b4d7b82b5
echo nl2br($text);