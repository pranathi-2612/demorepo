<!--recursive function-->
<?php
function display($num)
{
if($num<=5)
{
echo $num;
display($num+1);
}
}
display(1);
?>
