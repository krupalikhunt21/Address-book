<?php
$con = mysqli_connect('localhost','adb','adb','adb');
	if(mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: ".mysqli_connect_errno();
	}
if(isset($_POST['submit'])){
	$np=$_POST['np'];
	$cp=$_POST['cp'];
	$email=$_POST['email'];
	echo $sql = "UPDATE user SET pwd='$np',cpwd='$cp' where email='$email'";
	//$res = mysqli_query($con, $sql);
	if(mysqli_query($con,$sql)){
	header('location:index.php');
	}
	else{
	header('location:details.php');
	}
}
?>