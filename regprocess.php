<?php
	$con = mysqli_connect('localhost','adb','adb','adb');
	if(mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: ".mysqli_connect_errno();
	}
	$query = "INSERT INTO user(name,email,pwd,cpwd) VALUES('$_POST[fn]','$_POST[UserEmail]','$_POST[Password]','$_POST[ConfirmPassword]')";
	if(mysqli_query($con,$query))
	{
		header("location:index.php");
	}
	else
	{
		header("location:register.php");
	}
?>