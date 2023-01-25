<?php
/*$hostName = "localhost";
$userName = "adb";
$password = "adb";
$databaseName = "adb";
 $conn = new mysqli($hostName, $userName, $password, $databaseName); */
// Check connection
$conn = mysqli_connect("localhost", "adb", "adb", "adb");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>