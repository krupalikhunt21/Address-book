<?php 
if(isset($_POST['Submit'])){

$fullname=trim($_POST["fn"]);
$useremail=trim($_POST["UserEmail"]);
$username=trim($_POST["UserName"]);
$password=trim($_POST["Password"]);
$confirmpassword=trim($_POST["ConfirmPassword"]);
if($fullname =="") {
$errorMsg= "Error : You did not enter a name."; 
$code= "1";
}

//checkuseremail if email field is empty 
elseif($useremail =="")
{
$errorMsg= "Error : You did not enter a email.";
$code= "2";
} //check for valid email
else if(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i",$useremail)) {
$errorMsg= "Error : You did not enter a valid email.";
$code= "2";
}
else if(empty($username)) {
$errorMsg= "Error : You did not enter a username."; 
$code= 3;
}
else if(empty($password))
{
$errorMsg = "Error : Enter your password";
$code = 4;
}
else if(strlen($password) < 6 )
{
$errorMsg = "Error : Password must be 6 characters long !";
$code = 4;
}
else if(empty($confirmpassword))
{
 
$errorMsg = "Error : Enter your confirm password";
$code = 5;
}
else if(strlen($confirmpassword) < 6 )
{
$errorMsg = "Error : Confirm Password must be 6 characters long !";
$code = 5;
}
else if($confirmpassword!=$password)
{
$errorMsg = "Error : Password and Confirm Password doesnot match";
$code =5;
}
else{
echo "Success";
//final code will execute here.
}
}
?>
