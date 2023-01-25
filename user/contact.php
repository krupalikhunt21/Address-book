<?php
include ("header1.php"); 
include("connection.php");

?>


<!doctype html>
<html lang="en">
<head>
      
      <title>Contact Page</title>
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>

.vertical-menu {
  width: 200px;
  margin-left: 18px;
}

.vertical-menu a {
  background-color: #eee;
  color: black;
  display: block;
  padding: 12px;
  text-decoration: none;
}

.vertical-menu a:hover {
  background-color: #ccc;
}

.vertical-menu a.active {
  background-color: #04AA6D;
  color: white;
}
</style>
<head>
<body style="background:url('images/addressbook backgroundimage.jpeg');">
<header>
    

       <div class="welcome-text" style="margin-top: 100px;">


        
<div style="width:  240px; height: 30px; border:solid #fff 0px; margin-left: 20px; margin-top: -20px;margin-bottom: 15px; border-radius: 10px; ">
<a href="dashboard.php"><button type="button" class="btn btn-success">Add New Contacts</button></a>
</div>            

        

        <div style="width:  240px; height: 200px; border:solid #fff 0px; margin-left: 20px; margin-bottom: 00px; border-radius: 10px; ">
          

<div class="vertical-menu" style=" border-radius:10px !important;">
  <a href="#" class="active">Contacts</a>
  <?php
$n=1;
$select="select * from details";
$query=mysqli_query($connection,$select);
while($row=mysqli_fetch_array($query))
{
  ?>
  <a href="detailsprofile.php?id=<?php echo $row['id'];?>" ><i class="fa fa-user" aria-hidden="true"></i><?php echo $row['fname'];?></a>
  <?php
}
                                    ?> 
 
</div>
        </div>
        </div>
    </header>
         <footer class="ftr">
        <center>         
        <p style="padding: 20px">Copyright 2022
        created by <span>@Krupali Khunt
                         @Gaurav Tanna</span> &copy; Address Book</p>
    </center>
    </footer>
</body>
</html>







