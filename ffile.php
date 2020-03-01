<?php

$my_file = 'file.txt';

echo "Create a File";
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);

echo "Open File <br>";
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);

echo "Read File <br>";
$handle = fopen($my_file, 'r');
$data = fread($handle,filesize($my_file));

echo "Write File";
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
$data = 'This is the data';
fwrite($handle, $data);
?>

