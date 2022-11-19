
<?php
$a1=array(
	array(1,2,3),
	array(2,3,4),
	array(4,3,2));
$a2=array(
	array(1,3,3),
	array(2,4,4),
	array(4,2,2));
	
	$row=count($a1);
	$col=count($a1[0]);
	
echo "first matrix is:<br>";
for($i=0;$i<$row;$i++)
{
	for($j=0;$j<$col;$j++)
	{
		echo $a1[$i][$j]." ";
		
	}
	echo "<br>";
	
}
echo "second matrix is:<br>";
for($i=0;$i<$row;$i++)
{
	for($j=0;$j<$col;$j++)
	{
		echo $a2[$i][$j]." ";
		
	}
	echo "<br>";
	
}
$sum=array();
for($i=0;$i<$row;$i++)
{
	for($j=0;$j<$col;$j++)
	{
		$sum[$i][$j]=$a1[$i][$j]+$a2[$i][$j];
		echo $sum[$i][$j];
	}
	
}
/* echo "sum of matrix is:<br>";
for($i=0;$i<$row;$i++)
{
	for($j=0;$j<$col;$j++)
	{
		echo $sum[$i][$j]." ";
	}
	echo "<br>";
} */
?>
