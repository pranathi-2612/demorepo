<?php
$file=fopen('sample.txt','a');
fwrite($file,'welcome to php'."\n");
echo "file written";
fclose($file);
?>
