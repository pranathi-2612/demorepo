<?php
$a=array(array(1,2,3),array(2,5,4),array(3,2,5));
$row=count($a);
$col=count($a[0]);
	
echo "diagonal matrix is:<br>";
for($i=0;$i<$row;$i++)
{
	for($j=0;$j<$col;$j++)
	{
		if($i==$j)
		{
		$d=$a[$i][$j];	
		}
	
	}
	echo $d;
	echo "<br>";
	
}
?>