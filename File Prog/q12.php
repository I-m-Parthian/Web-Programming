<?php
    $file = 'file.txt';
    $handle = fopen($file, 'w') or die('Cannot open file:  '.$file);
    $data = 'This is the data';
    fwrite($handle, $data);
    fclose($handle);

    echo "data written to file.txt<br>Reading data<br>";
    $file = 'file.txt';
    $handle = fopen($file, 'r');
    $data = fread($handle,filesize($file));
    echo $data;
?>
