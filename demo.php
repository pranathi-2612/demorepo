<?php
$conn_string=new mysqli("localhost","root","","new_db");
if($conn_string->connect_error)
{
die('connection failed'.$conn_string->connect_error);
}
$q="select * from my_tb";
$data=mysqli_query($conn_string,$q);
$rec=[];
foreach($data as $row)
{
array_push($rec,$row);
}
header('Content-type:application/json');
echo json_encode($rec);
?>