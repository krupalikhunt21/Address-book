<?php
	$con = mysqli_connect('localhost','root','','adb');
	if(mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: ".mysqli_connect_errno();
	}
	$query = "INSERT INTO dashboard(id,fname,lname,mobile,dob,hadd,oadd) VALUES('','$_POST[firstname]','$_POST[lastname]','$_POST[mobile]','$_POST[dob]','$_POST[address]','$_POST[oaddress]')";
	if(mysqli_query($con,$query))
	{
	header("location:manage_dashboard.php");
	}
	else
	{
    header("location:Dashboard.php");
	}
?>