 <?php

// by default, error messages are empty
$valid=$fnameErr=$lnameErr=$emailErr= $phoneErr=$passErr=$cpassErr='';

// by default,set input values are empty
$set_firstName=$set_lastName=$set_email='';    
 extract($_POST);

if(isset($_POST['register']))
{
   
   //input fields are Validated with regular expression
   $validName="/^[a-zA-Z ]*$/";
   $$validPhone="/^[0-9]{10}$/";
   $validEmail="/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/";
   $uppercasePassword = "/(?=.*?[A-Z])/";
   $lowercasePassword = "/(?=.*?[a-z])/";
   //$digitPassword = "/(?=.*?[0-9])/";
   //$spacesPassword = "/^$|\s+/";
   //$symbolPassword = "/(?=.*?[#?!@$%^&*-])/";
   $minEightPassword = "/.{8,}/";

 //  Name Validation
if(empty($name)){
   $fnameErr="First Name is Required"; 
}
else if (!preg_match($validName,$name)) {
   $fnameErr="Digits are not allowed";
}else{
   $fnameErr=true;
}

//  Phone Validation 
if(empty($phone)){
  $passErr="Phone is Required"; 
} 
elseif (!preg_match($validPhone,$phone) {
  $phoneErr="Only numeric value is allowed.";
}
elseif (strlen ($mobileno) != 10) {  
            $phoneErr = "Mobile no must contain 10 digits.";  
            }  
else{
   $passErr=true;
}
//Email Address Validation
if(empty($email)){
  $emailErr="Email is Required"; 
}
else if (!preg_match($validEmail,$email)) {
  $emailErr="Invalid Email Address";
}
else{
  $emailErr=true;
}

if(empty($uname)){
  $unameErr="User Name is Required"; 
}
else{
  $unameErr=true;
}

    
// password validation 
if(empty($passwd)){
  $passErr="Password is Required"; 
} 
elseif (!preg_match($digitPassword,$password) {
  $passErr="Password must be at least one uppercase letter, lowercase letter, digit, a special character with no spaces and minimum 8 length";
}
else{
   $passErr=true;
}
// check all fields are valid or not
if($fnameErr==1 && $lnameErr==1 && $emailErr==1 && $passErr==1 && $cpassErr==1)
{
   /*$valid="All fields are validated successfully";


   
   //legal input values
   $firstName= legal_input($first_name);
   $lastName=  legal_input($first_name);
   $email=     legal_input($email);
   $password=  legal_input($password);

   // here you can write Sql Query to insert user data into database table
}else{
     // set input values is empty until input field is invalid
    $set_firstName=$first_name;
    $set_lastName= $last_name;
    $set_email=    $email;
}

}


// convert illegal input value to ligal value formate
function legal_input($value) {
  $value = trim($value);
  $value = stripslashes($value);
  $value = htmlspecialchars($value);
  return $value;*/
}
?>