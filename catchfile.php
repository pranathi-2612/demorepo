<?php
if(isset($_POST['butt']))
{
$a=$_POST["txt1"];
try
{
	if(!file_exists($a))
	{
	throw new exception("File not exists");
	}
	$p=fopen($a,'r');
	echo fread($p,filesize($a));
}
catch(Exception $obj)
{
echo $obj;
}
}
?>
