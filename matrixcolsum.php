<?php
$a=array(array(1,2,3),array(2,5,4));
$row=count($a);
$col=count($a[0]);
	
echo "col sum of matrix is:<br>";
for($i=0;$i<$col;$i++)
{
$sum=0;
	for($j=0;$j<$row;$j++)
	{
		$sum=$sum+$a[$j][$i];	
        	
	
	}
	echo $sum;
	echo "<br>";
	
}
?>