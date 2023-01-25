<?php
 $conn = mysqli_connect("localhost","adb","adb","adb");
 if (!$conn) {
 die("connection error");
 }
 $sql = "SELECT * FROM dashboard";
 $result = mysqli_query($conn,$sql);
 while ($row = mysqli_fetch_assoc($result)) {
 echo "id =".$row['id']."<br>"."fname =".$row['fname']."<br>"."lname
=".$row['lname']."<br>"."mobile =".$row['mobile']."<br>"."dob 
=".$row['dob']."<br>"."hadd =".$row['hadd']."<br>"."oadd 
=".$row['oadd']."<br>";
}
 ?>