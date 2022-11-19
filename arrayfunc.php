<?php
$arr=array(6,4,9,7,1,1,6,4);
$a=array("name"=>"anu","place"=>"kannur");
$b=array('helloo','anu','welcome','ss');
 //sort($arr);  ascending
 //rsort($arr);  descending
 asort($a);
 $c=count($arr);
 for($i=0;$i<$c;$i++)
 {
    echo $arr[$i];

 }


// $arrlength = count($arr);
// for($x = 0; $x < $arrlength; $x++) {
//   echo $a[$x];
//   echo "<br>";
// }
foreach($a as $key=>$val)
{
    echo $key." ";
    echo $val;
}
echo in_array('7',$arr);
echo is_array($arr);
echo array_search('7',$arr);//3 position
echo array_key_exists(2,$arr);
print_r(array_unique($arr));
print_r(implode('.',$arr));
echo "<br>";

print_r(implode('.',$b));
$d=implode('.',$b);
print_r(explode('.',$d));

// echo rsort($arr);
// echo  asort($a);
// echo ksort($a);
// echo arsort($a);
// echo krsort($a);
?>