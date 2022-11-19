<?php
$conn_string=new mysqli("localhost","root","","data_db");
if($conn_string->$connect_error)
{
    die("connection failed".$conn_string->connect_error);
}
?>