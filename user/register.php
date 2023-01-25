<?php
include ("connection.php");
include ("header.php");
?>


<?php

$count="";
if(isset($_POST['btn_submit']))
{






////////////////uname
$uname=$_POST['uname'];
if($uname=="")
{
$n1="Enter first name";
$count++;
}



////////////////fname
$name=$_POST['name'];
if($name=="")
{
$n5="Enter first name";
$count++;
}

////////////////lname
$email=$_POST['email'];
if((!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i",$email)))
{
$n2="Enter correct email";
$count++;
}

////////////////lname
$pwd=$_POST['pwd'];
if($pwd=="")
{
$n3="Enter Date of birth";
$count++;
}

////////////////lname
$cpwd=$_POST['cpwd'];
if($cpwd=="")
{
$n4="Enter your Home address";
$count++;
}

}
?>


<?PHP
if(isset($_POST['btn_submit']) && $count==0)
{

$uname=$_POST['uname'];
$name=$_POST['name'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$cpwd=$_POST['cpwd'];

$checkuser = "select * from user where email='$email'";
$result = mysqli_query($connection,$checkuser,$checkuser1);
$count = mysqli_num_rows($result);

$checkuser1 = "select * from user where uname='$uname'";
$result1 = mysqli_query($connection,$checkuser1);
$count1 = mysqli_num_rows($result1);

if($count>0)
{
  echo "email already exist";
}
else if($count1>0)
{
  echo "User name already exist";
}
else
{
echo $insert_user="INSERT INTO `user` (
`uname`,
`name` ,
`email` ,
`pwd`,
`cpwd` 

)
VALUES (
 '$uname','$name', '$email','$pwd','$cpwd')";
$query=mysqli_query($connection,$insert_user);
  
}






if($query)
{
?><script>alert("User Registered Successfully...");window.location.href="index.php";</script><?php
}
}
?>









<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Register </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="register.css">

<style type="text/css">
  .header {
  overflow: hidden;
  background-color: #c1c1c1;
  padding: 20px 10px;
}

/* Style the header links */
.header a {

  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  line-height: 25px;
  border-radius: 4px;
}

/* Style the logo link (notice that we set the same value of line-height and font-size to prevent the header to increase when the font gets bigger */
.header a.logo {
  font-size: 25px;
  font-weight: bold;
box-shadow:1px 1px 0px 0px black ;
  border: 2px solid white ;
  border-radius: 40px;
}

/* Change the background color on mouse-over */
.header a:hover {
  
  border: 2px solid white ;
    font-color:white; 
    box-shadow:1px 1px 0px 0px black ;
  background-color: ;
  border-radius: 10px;
  color: black;
}

/* Style the active/current link*/
.header a.active {

  color: black;
}

/* Float the link section to the right */
.header-right {
  float: right;
}

</style>
<body>


  <form autocomplete="on"
method="POST" name="form">




<div class="wrapper">
  <div class="inner-warpper text-center">
    <h2 class="title">Registration page</h2>




<div class="input-group">
        <label class="palceholder" for="UserName"></label>
        <input  required class="form-control" name="uname" id="uname" type="text" placeholder="User Name">
 
        <span class="lighting"></span>
      </div>


    

      <div class="input-group">
        <label class="palceholder" for="FullName"></label>
        <input  required class="form-control" name="name" id="name" type="text" placeholder="User Name">
 
        <span class="lighting"></span>
      </div>
      <div class="input-group">
        <label class="palceholder" for="UserEmail"></label>
        <input class="form-control" name="email" id="email" type="text" placeholder="UserEmail" > 
        <div class="col-sm-4" style="color:red;">
                                        <?php echo $n2;?>
                                        </div>
        <span class="lighting"></span>
      </div>
      
        <div class="input-group">
        <label class="palceholder" for="Password"></label>
        <input type="password" class="form-control" name="pwd" id="pwd" type="text" placeholder="Password">
 
        <span class="lighting"></span>
      </div>
      <div class="input-group">
        <label class="palceholder" for="ConfirmPassword"></label>
        <input type="password" class="form-control" name="cpwd" id="cpwd" type="text" placeholder="Confirm Password" 
        >

        <span class="lighting"></span>
      </div>
      <button type="submit" name="btn_submit" id="submit">Sign Up</button>
      <div class="clearfix supporter">
      </div>
  </div>
  <div class="signup-wrapper text-center">

  </div>
</div>


<!-- partial -->
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js'></script><script  src="./script.js"></script>

</form>
</body>
</html>
