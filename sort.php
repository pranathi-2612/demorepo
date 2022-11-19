<?php
$arr=array(24,65,4,90,98,6,4);
for($i=0;$i<=count($arr);$i++)
{
	for($j=$i+1;$j<count($arr);$j++)
	{
		if($arr[$i]>$arr[$j])
		{
		$temp=$arr[$i];
		$arr[$i]=$arr[$j];
		$arr[$j]=$temp;
		}
	}
}
echo "sorted array is:";
foreach ($arr as $val)
{
	echo $val;
}
?>
	