<?php
if(isset($_POST['sub']))
{
	$number=$_POST['num'];
	$total=0;
	$num=$number;
	while($num!=0)
	{
		$rem=$num%10;
		$total=$total+$rem*$rem*$rem;
		$num=$num/10;
	}
	if($total==$number)
	{
	 echo "number is amstrong";
	 }
	 else
	 {
	 echo "not an amstrong";
	 }
	 }