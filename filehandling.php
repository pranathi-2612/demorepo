<?php
$p=fopen("myfile.txt","r");
echo fread($p,filesize("myfile.txt"));
?>