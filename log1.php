<?php if(isset($_POST['Submit'])){

$userName=trim($_POST["userName"]);
$userPassword=trim($_POST["userPassword"]);

if($userName =="") {
$errorMsg= "error : You did not enter a name.";
$code= "1" ;
}
elseif($userPassword == "") {
$errorMsg= "error : Please enter password.";
$code= "2";
}
elseif(strlen($userPassword)){
$errorMsg= "error : Password should be 6 digits.";
$code= "2";
}
else{
echo "Success";
 
//final code will execute here.
}
}
?>
