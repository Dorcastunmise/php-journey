<?php
    $file = 'extras/users.txt';
    if(file_exists($file)) {
        // echo readfile($file);
        $handle     =  fopen($file, 'r');
        $contents   =  fread($handle, filesize($file));
        fclose($handle);
        echo $contents;
    } else {
        $handle     =  fopen($file, 'w');
        $contents   =  'Shuram' . PHP_EOL . 'Mike' . PHP_EOL . 'Sara';
        fwrite($handle, $contents);
        fclose($handle);   
    }
?>