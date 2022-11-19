<?php
class myexception extends Exception
{
}
try
{
 $a=25;
 $b=-1;
	if($b==0)
	{
	throw new myexception("division by zero");
	}
	if($b==-1)
	{
	throw new myexception("negative");
	}
	$c=$a/$b;
	echo $c;
}
catch(myexception $obj1)
{
// $h=$obj1->getMessage();
// echo $h;
echo $obj1->getMessage();
}
// catch(myexception $obj1)
// {
// $j=$obj1->getMessage();
// echo $j;
// }
?>

