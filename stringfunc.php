<?php
$str="hello world";
$str1="HELLO WORLD";
echo str_replace('world','php',$str);//hello php
echo strpos($str,'world');//6
echo Strtolower($str1);//hello world
echo Strtoupper($str);//HELLO WORLD
echo lcfirst($str1);//hELLO WORLD
echo ucfirst($str);//Hello world
echo str_word_count($str);//2
echo strlen($str);//11
echo strrev($str);//dlrow olleh
echo strcmp("hi","hi");//0
echo "<br>";
echo substr('Welcome to php',8,4);
echo "<br>";
echo substr('Welcome to php',3);
echo "<br>";
echo substr('Welcome to php',-3);
echo "<br>";

?>