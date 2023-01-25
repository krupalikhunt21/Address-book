<?php

session_start();
include ("detailsconn.php"); 
include ("header1.php");

if($_SESSION["uname"]==true)
{

}
else
{
  header('location:index.php');
}

?>

<?php
$count="";
if(isset($_POST['btn_submit']))
{

////////////////fname
$fname=$_POST['fname'];
if($fname=="")
{
$n2="Enter first name";
$count++;
}

////////////////lname
$lname=$_POST['lname'];
if($lname=="")
{
$n3="Enter last name";
$count++;
}

$email=$_POST['email'];
if($emial=="")
{
$n4="Enter valid Email Id";
$count++;
}

$mobile=$_POST['mobile'];
if($mobile=="")
{
$n5="Enter mobile";
$count++;
}
elseif(strlen($mobile)<10)
{
$n5="mobile Is Too Short";
$count++;
}


$gender=$_POST['gender'];
if($gender=="")
{
$n6=" Please Select Gender";
$count++;
}

$dob=$_POST['dob'];
if($dob=="")
{
$n7="Enter Date of birth";
$count++;
}


$hadd=$_POST['hadd'];
if($hadd=="")
{
$n8="Enter your Home address";
$count++;
}

$oadd=$_POST['oadd'];
if($oadd=="")
{
$n9="Enter your Occupation address";
$count++;
}

$city=$_POST['city'];
if($city=="")
{
$n10="Enter your Occupation address";
$count++;
}

$state=$_POST['state'];
if($state=="")
{
$n11="Enter your Occupation address";
$count++;
}

}
?>











<!----------------------insert code--------------------->
<?PHP

$user=$_SESSION["uname"];
$sql="select * from user where uname='$user'";
$result=mysqli_query($connection, $sql) or die ("Query failed");
$row=mysqli_fetch_assoc($result);
$uid=$row["id"];



if(isset($_POST['btn_submit']) && $count==0)
{

echo $insert_dashboard="INSERT INTO `details` (


`fname` ,
`lname` ,
`email`,
`mobile` ,
`gender`,
`dob` ,
`hadd`, 
`oadd`,
`city`,
`state`,
`uid`


)
VALUES ('$fname','$lname','$email','$mobile','$gender','$dob','$hadd','$oadd',
 '$city','$state','$uid')";
$query=mysqli_query($connection,$insert_details);
if($query)
{
?><script>alert("Record Inserted Successfully...");window.location.href="detailsprofile.php";</script><?php
}
}
?>


<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <title>Details</title>
 <body bgcolor="#D6F9E9"> 
<center>
        <h1>Details</h1>
        <div class="container">
            <div class="row">
                <form bord autocomplete="on"
method="POST"   name="form"  onsubmit="returnvalidate();"  enctype="multipart/form-data">
                <div class="col-10">
                    <label for="fname">First Name:</label>
                </div>
                <div class="col-90">
                    <input type="text" id="fname" name="fname" placeholder="Enter your first name">
                    
                </div>
            <div class="col-sm-4" style="color:red;">
                    <?php echo $n2;?>
                    </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="lname">Last Name:</label>
                </div>
                <div class="col-90">
                    <input type="text" id="lname" name="lname" placeholder="Enter your last name">
                <div class="col-sm-4" style="color:red;">
                    <?php echo $n3;?>
                    </div>
                </div>
                            <div class="row">
                <div class="col-10">
                    <label for="email">Email:</label>
                </div>
                <div class="col-90">
                    <input type="text" id="email" name="email"  placeholder="it should contain @.">
                <div class="col-sm-4" style="color:red;">
                    <?php echo $n4;?>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="mobile">Mobile:</label>
                </div>
                <div class="col-90">
                    <input type="text" id="mobile" name="mobile" placeholder="only 10 digits are allowed">
                <div class="col-sm-4" style="color:red;">
                    <?php echo $n5;?>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="gender" required>Gender:</label>
                </div>
                <div class="col-90">
                    <input type="radio" id="male" name="gender" value="male"/>Male
                    <input type="radio" id="female" name="gender" value="female"/>Female
                    <div class="col-sm-4" style="color:red;">
                    <?php echo $n6;?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="dob">Date Of Birth:</label>
                </div>
                <div class="col-90">
                    <input type="Date" id="dob" name="dob">
                </div>
                <div class="col-sm-4" style="color:red;">
                    <?php echo $n7;?>
                    </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="address">Home Address:</label>
                </div>
                <div class="col-90">
                    <textarea name="hadd" id="hadd" cols="30" rows="10"></textarea>

                    <div class="col-sm-4" style="color:red;">
                    <?php echo $n8;?>
                    </div>
                </div>
            <div class="row">
                <div class="col-10">
                    <label for="address">Occupation Address:</label>
                </div>
                <div class="col-90">
                    <textarea name="oadd" id="oadd" cols="30" rows="10"></textarea>
                    <div class="col-sm-4" style="color:red;">
                    <?php echo $n9;?>
                    </div>
                </div>
                 <div class="col-90">
                    <label for="state">City:</label>
                </div>
                    <input type="text" id="city" name="city" maxlength="10">
                 <div class="col-sm-4" style="color:red;">
                    <?php echo $n10;?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="state">State:</label>
                </div>
                <div class="col-90">
                    <input type="text" id="state" name="state">
                    <div class="col-sm-4" style="color:red;">
                    <?php echo $n11;?>
                    </div>
                </div>
            </div>
            </div>
            <div class="row">
                <input type="submit" name="btn_submit" >
            </div>
            </form>  
        </div>  
    </center>
    </body>
</html>


<?php

$user=$_SESSION["uname"];
$query=mysql_query("selecct * from user where uname='$user'");
?>