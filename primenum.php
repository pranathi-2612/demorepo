<?php
$num=16;
$count=0;
for($i=1;$i<=$num;$i++)
{
    if(($num%$i)==0)
    {
        $count++;
    }
}
if($count<3)
{
    echo "prime";
}
else
{
    echo "Not Prime";
}