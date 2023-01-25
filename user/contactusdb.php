<?php
	$con = mysqli_connect('localhost','adb','adb','adb');
	if(mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: ".mysqli_connect_errno();
	}
	$query = "INSERT INTO contact(id,email,message) VALUES('','$_POST[userEmailId]','$_POST[message]')";
	if(mysqli_query($con,$query))
	{
		header("location:index.php");
	}
	else
	{
		header("location:register.php");
	}
?>