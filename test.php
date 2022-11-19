<?php
echo "Welcome to Programming";
echo "<br>";
print("Welcome");
echo "<br>";
?>
<?php
$a=10;
$b=20;
$c=$a+$b;
echo $a++;
echo "<br>";
echo ++$a;
echo "<br>";
echo "Sum=".$c;
echo "<br>";

?>
<?php
$b=25;
if($b%2==0)
{
	echo "number is even";
}
else
{
	echo "number is odd";
}

?>
<?php
$a=1000;
$b=600;
$c=30;
if($a>$b&&$a>$c)
{
	echo "$a is greater";
}
else if($b>$a && $b>$c)
{
	echo "$b is greater";
}
else
{
	echo "$c is greater";
}
?>
<?php
$a="blue";
switch($a)
{
case "red":
echo "colour is red";
break;
case "green":
echo "colour is green";
break;
case "blue":
echo "colour is blue";
break;
default:
echo "not found";
break;

}
echo "<br>";
?>
<?php
$x=1;
while($x<=5)
{
	echo $x;
	echo "<br>";
	$x++;
}
echo "<br>";
?>
<?php
$x=1;
Do
{
 echo $x;
 $x++;
}while($x<=5);
	?>
	<?php
	for($x=1;$x<=6;$x++)
	{
		echo $x;
	}
	echo "<br>";
	?>
<?php
$arr=array('red','green','blue');
foreach($arr as $a)
{
	echo $a;
	echo "<br>";
}
?>
<?php
for($x=1;$x<=10;$x++)
	{
		if($x==6)
		{
			break;
		}
		echo $x;
	}
	echo "<br>";
?>
<?php
for($x=1;$x<=10;$x++)
	{
		if($x==6)
		{
			continue;
		}
		echo $x;
	}
	echo "<br>";
?>
<?php
function display()
{
	echo "welcome to php";
}
display();
?>

