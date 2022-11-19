<html>
<body>
<form method="post" action="">
<input type="text" name="num">
<input type="submit" name="sub" value="search..">
</form>
</body>
</html>
<?php
if(isset($_POST['sub']))
{
	$a=array(2,4,3,5,6,12,8);
	$num=$_POST['num'];
	$c=0;
	for($i=0;$i<count($a);$i++)
	{
		$b=$a[$i];
		if($b==$num)
		{
			$c=1;
			break;
		}
	}
		if($c==0)
		{
			echo "element not found";
		}
		else
		{
			echo "found";
		}
}
?>
			
			