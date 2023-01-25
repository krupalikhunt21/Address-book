<?php
 include ("header.php");
 ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Reset Passwprd</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="css/login.css">
<body>
<div class="wrapper">
  <div class="inner-warpper text-center">
    <h2 class="title">Forgot Password</h2>
    <form action="forgotpdb.php" id="formvalidate" method="post">
      <div class="input-group">
        <label class="placeholder" for="Email Id"></label>
        <input class="form-control" name="email" id="emailId" type="text" placeholder="EmailId" />
        <span class="lighting"></span>
      </div>
      <div class="input-group">
        <label class="placeholder" for="Enter new Password"></label>
        <input class="form-control" name="np" id="Enter new Password" type="password" placeholder="Enter new Password" />
        <span class="lighting"></span>
      </div>
            <div class="input-group">
        <label class="placeholder" for="Confirm Password"></label>
        <input class="form-control" name="cp" id="set newPassword" type="password" placeholder="confirm password"/>
        <span class="lighting"></span>
      </div>


      <button type="submit" id="login" name="submit">Reset Password</button>
      
    </form>
  </div>
  <div class="signup-wrapper text-center">
    <a href="register.php">Don't have an accout? <span class="text-primary">Create One</span></a>
  </div>
</div>


<!-- partial -->
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js'></script><script  src="./script.js"></script>


</body>
</html>
