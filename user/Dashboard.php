<?php
session_start();
include ("connection.php"); 
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

$fname=$_POST['fname'];
if($fname=="")
{
$n1="Enter first name";
$count++;
}

////////////////lname
$lname=$_POST['lname'];
if($lname=="")
{
$n2="Enter last name";
$count++;
}

////////////////lname
$dob=$_POST['dob'];
if($dob=="")
{
$n3="Enter Date of birth";
$count++;
}

////////////////lname
$hadd=$_POST['hadd'];
if($hadd=="")
{
$n4="Enter your Home address";
$count++;
}

////////////////lname
$oadd=$_POST['oadd'];
if($oadd=="")
{
$n5="Enter your Occupation address";
$count++;
}



////////////////Name
$mobile=$_POST['mobile'];
if($mobile=="")
{
$n6="Enter mobile";
$count++;
}
elseif(strlen($mobile)<10)
{
$n6="mobile Is Too Short";
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

echo $insert_dashboard="INSERT INTO `dashboard` (


`fname` ,
`lname` ,
`mobile` ,
`dob` ,
`hadd`, 
`oadd`,
`uid`


)
VALUES (
 '$fname','$lname','$mobile','$dob','$hadd','$oadd','$uid')";
$query=mysqli_query($connection,$insert_dashboard);
if($query)
{
?><script>alert("Record Inserted Successfully...");window.location.href="manage_dashboard.php";</script><?php
}
}
?>


<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <title>Dashboard</title>
 <body bgcolor="#D6F9E9"> 
<center>
        <h1>Dashboard</h1>
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
                    <?php echo $n1;?>
                    </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="lname">Last Name:</label>
                </div>
                <div class="col-90">
                    <input type="text" id="lname" name="lname" placeholder="Enter your last name">
                <div class="col-sm-4" style="color:red;">
                    <?php echo $n2;?>
                    </div>
                </div>
            <div class="row">
                <div class="col-10">
                    <label for="mobile">Mobile:</label>
                </div>
                <div class="col-90">
                    <input type="text" id="mobile" name="mobile" placeholder="only 10 digits are allowed">
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
                    <?php echo $n3;?>
                    </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="address">Home Address:</label>
                </div>
                <div class="col-90">
                    <textarea name="hadd" id="hadd" cols="30" rows="10"></textarea>

                    <div class="col-sm-4" style="color:red;">
                    <?php echo $n4;?>
                    </div>
                </div>
            <div class="row">
                <div class="col-10">
                    <label for="address">Occupation Address:</label>
                </div>
                <div class="col-90">
                    <textarea name="oadd" id="oadd" cols="30" rows="10"></textarea>
                    <div class="col-sm-4" style="color:red;">
                    <?php echo $n5;?>
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