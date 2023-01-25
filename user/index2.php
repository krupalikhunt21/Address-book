<?PHP
include ("connection.php");
$user=$_SESSION["name"];
echo "nirmiyatra";
$sql="select * from user";
$result=mysqli_query($connection, $sql) or die ("Query failed");
$row=mysqli_fetch_assoc($result);
print_r($row);
?>












<?php

include ("connection.php"); 
include ("header.php");
session_start();


if($_SESSION["name"]==true)
{
  echo"welcome"." ".$_SESSION["name"];
}
else
{
  header('location:index.php');
}

?>


<!----------------------insert code--------------------->
<?PHP
include ("connection.php");
$user=$_SESSION["name"];
$sql="select * from user where name='$user'";
$result=mysqli_query($connection, $sql) or die ("Query failed");
$row=mysqli_fetch_assoc($result);
$uid=$row["id"];



if(isset($_POST['btn_submit']))
{

 $insert_user="INSERT INTO `dashboard` (


`fname` ,
`lname` ,
`mobile` ,
`dob` ,
`hadd`, 
`oadd`,
'uid',

)
VALUES (
 '$fname','$lname','$mobile','$dob','$hadd','$oadd','$uid')";
$query=mysqli_query($connection,$insert_dashboard);
if($query)
{
?><script>alert("Record Inserted Successfully...");window.location.href="dashboard_management.php";</script><?php
}
}
?>


<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <title>Dashboard</title>
 <body bgcolor="#D6F9E9"> 
<center>
        <h1>Dashboa</h1>
        <div class="container">
            <div class="row">
                <form bord autocomplete="on"
method="post"  name="form">
                <div class="col-10">
                    <label for="fname">First Name:</label>
                </div>
                <div class="col-90">
                    <input type="text" id="fname" name="firstname" placeholder="Enter your first name">
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="lname">Last Name:</label>
                </div>
                <div class="col-90">
                    <input type="text" id="lname" name="lastname" placeholder="Enter your last name">
                </div>
            <div class="row">
                <div class="col-10">
                    <label for="mobile">Mobile:</label>
                </div>
                <div class="col-90">
                    <input type="text" id="mobile" name="mobile" placeholder="only 10 digits are allowed">
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="dob">Date Of Birth:</label>
                </div>
                <div class="col-90">
                    <input type="Date" id="dob" name="dob">
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="address">Home Address:</label>
                </div>
                <div class="col-90">
                    <textarea name="address" id="address" cols="30" rows="10"></textarea>
                </div>
            <div class="row">
                <div class="col-10">
                    <label for="address">Occupation Address:</label>
                </div>
                <div class="col-90">
                    <textarea name="oaddress" id="address" cols="30" rows="10"></textarea>
                </div>
            </div>
            <div class="row">
                <input type="submit" name="btn_submit" value="Submit"   onclick="SaveDetails()">
            </div>
            </form>  
        </div>  
    </center>
    </body>
</html>


<?php

$user=$_SESSION["name"];
$query=mysql_query("selecct * from user where name='$user'");
?>