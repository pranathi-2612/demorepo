
<?php
$a=array(array(1,2,3),array(2,5,4));
$row=count($a);
$col=count($a[0]);
	
echo "row sum of matrix is:<br>";
for($i=0;$i<$row;$i++)
{
$sum=0;
	for($j=0;$j<$col;$j++)
	{
		$sum=$sum+$a[$i][$j];	
        	
	
	}
	echo $sum;
	echo "<br>";
	
}
?>