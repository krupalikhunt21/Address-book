<?php
	$connection = mysqli_connect("localhost","root","","adb");
	if(mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: ".mysqli_connect_errno();
	}
	$query = "INSERT INTO user(name,email,pwd,cpwd) VALUES('$_POST[name]','$_POST[email]','$_POST[pwd]','$_POST[cpwd]')";
	if(mysqli_query($connection,$query))
	{
		header("location:index.php");
	}
	else
	{
		header("location:register.php");
	}
?>