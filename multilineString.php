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
echo nl2br($text);