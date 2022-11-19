<!--function with argument-->

<?php
function fname($fname)
{
 echo $fname;
 }
fname('John');
fname('Arun');
 ?>
 <?php
function add($a,$b)
{
 echo $a+$b;
 }
add(5,5);
 ?>
  <?php
function num($a=50)
{
 echo $a;
 }
num(10);
num();
num(30);
 ?>
 
 <?php
function add_five(&$value) {
  $value += 5;
}

$num = 2;
add_five($num);
echo $num;
?>
