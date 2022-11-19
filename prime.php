<?php
if(isset($_POST['sub']))
{
$limit=$_POST['num'];
for($i=1;$i<=$limit;$i++)
{
	$c=0;
	for($j=1;$j<=$i;$j++)
    {
	  if($i%$j==0)
	  {
	   $c++;
	   }
	}
	   if($c==2)
	   {
	    echo $i;
		echo "<br>";
	   }
	   }
	   }
	   else
	   {
	   header('location:form.php');
	   }
?>