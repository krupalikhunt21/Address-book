<?php
include ("header.php"); 
?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Contact US </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="register.css">
<body>



<div class="wrapper">
  <div class="inner-warpper text-center">
    <h2 class="title">Contact Us</h2>
    <form action="contactusdb.php" id="formvalidate" method="post">   
      <div class="input-group">
        <label class="palceholder" for="userEmailId"></label>
        <input class="form-control" name="email" id="userEmailId" type="userEmailId" placeholder="Email Id" />
        <span class="lighting"></span>
      </div>
      <div class="input-group">
      <label class="palceholder" for="Enter message"></label>
        <input class="form-control" name="message" id="message" type="Text" placeholder="Enter message" />
        
        <span class="lighting"></span>
      </div>


      <button type="submit" id="Submit">Submit</button>
    </form>
  </div>
  <div class="signup-wrapper text-center">

  </div>
</div>


<!-- partial -->
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js'></script><script  src="./script.js"></script>


</body>
</html>
