<?php
$valid=$nameErr=$addrErr=$phErr=$emailErr=$passErr="";
if(isset($_POST['sub']))
{
$name=$_POST['name'];
$addr=$_POST['address'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$passwd=$_POST['password'];
$validname="/^[a-zA-Z]*$/";
$validaddr="/^[().,a-z A-Z0-9]+$/";
$validphone="/^[0-9]$/";
$validpass="/.{8,}/";
if(empty($name))
{
    $nameErr="name required";
}
else if(!preg_match($validname,$name))
{
    $nameErr="invalid name";
}
if(empty($addr))
{
    $addrErr="address required";
}
else if(!preg_match($validaddr,$addr))
{
    $addrErr="invalid address";
}
if(empty($phone))
{
    $phErr="phone required";
}
else if(!preg_match($validphone,$phone))
{
    $phErr="invalid phone";
}
if(empty($passwd))
{
    $passErr="password required";
}
else if(!preg_match($validpass,$passwd))
{
    $passErr="invalid password";
}
if($nameErr==1 && $phErr==1 && $addrErr==1 && $phErr==1 && $passErr==1)
{
    ?>
    <table>
        <tr><td>Name</td>
   <td><?php echo $name;?></td>
   <tr><td>address</td>
   <td><?php echo $addr;?></td>
   <tr><td>phone</td>
   <td><?php echo $phone;?></td>
   <tr><td>password</td>
   <td><?php echo $passwd;?></td>
   <tr><td>email</td>
   <td><?php echo $email;?></td>
</table>
<?php
}
}
?>