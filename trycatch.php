<?php
$a=10;
$b=0;
try
{
    if($b==0)
    {
        throw new Exception("division by zero");
    }
    else
    {
        $res=$a/$b;
        echo $res;
    }
}
catch(Exception $e)
{
    echo $e->getmessage();
   // echo "Error $e";
}
?>