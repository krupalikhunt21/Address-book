<?php 

include ("connection.php"); 

if(isset($_POST['Submit'])){

$name=trim($_POST["name"]);
$email=trim($_POST["email"]);
$pwd=trim($_POST["pwd"]);
$cpwd=trim($_POST["cpwd"]);

if($name =="") {
$errorMsg= "Error : You did not enter a name."; 
$code= "1";
}

//checkemail if email field is empty 
elseif($email =="")
{
$errorMsg= "Error : You did not enter a email.";
$code= "2";
} //check for valid email
else if(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i",$email)) {
$errorMsg= "Error : You did not enter a valid email.";
$code= "2";
}

else if(empty($pwd))
{
$errorMsg = "Error : Enter your pwd";
$code = 4;
}
else if(strlen($pwd) < 6 )
{
$errorMsg = "Error : pwd must be 6 characters long !";
$code = 4;
}
else if(empty($cpwd))
{
 
$errorMsg = "Error : Enter your c pwd";
$code = 5;
}
else if(strlen($cpwd) < 6 )
{
$errorMsg = "Error : c pwd must be 6 characters long !";
$code = 5;
}
else if($cpwd!=$pwd)
{
$errorMsg = "Error : pwd and c pwd doesnot match";
$code =5;
}
else{
echo "Success";
//final code will execute here.
}
}
?>
