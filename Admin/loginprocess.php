<?php
session_start();
include("connection.php");
?>
<?php
$con=mysqli_connect("localhost","root","","adb");
// Check connection
$pwd = $_POST['pwd'];
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$sql="SELECT * FROM admin WHERE name='".$_POST['name']."'";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
$dbpwd = $row['pwd'];
}
if($pwd==$dbpwd)
{
header("location:home.php");
}
else
{ 
header("location:index.php");
}
?>
