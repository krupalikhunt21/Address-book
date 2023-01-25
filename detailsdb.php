<?php
	$con = mysqli_connect('localhost','adb','adb','adb');
	if(mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: ".mysqli_connect_errno();
	}
	$query = "INSERT INTO details(id,fname,lname,email,mobile,gender,dob,hadd,oadd,city,state) VALUES('','$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[mobile]','$_POST[gender]','$_POST[dob]','$_POST[address]','$_POST[oaddress]','$_POST[city]','$_POST[state]')";
	if(mysqli_query($con,$query))
	{
	header("location:Dashboard.php");
	
	}
	else
	{
    header("location:details.php");

	}
?>