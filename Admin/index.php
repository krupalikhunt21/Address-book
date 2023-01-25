<?php
include "log1.php";
if (isset($errorMsg)) {
 echo "<h1 class='message'>".$errorMsg. "</h1>";
}
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="login.css">
</head>
<body>
<div class="wrapper">
  <div class="inner-warpper text-center">
    <h2 class="title">Login Here</h2>
    <form autocomplete="off"
method="post" action="loginprocess.php" onSubmit="return validate(this);" name="form">
      <div class="input-group">
        <label class="placeholder" for="userName"></label>
        <input required class="form-control" name="name" id="userName" type="text" placeholder="Username" />
        <span class="lighting"></span>
      </div>
      <div class="input-group">
        <label class="placeholder" for="userPassword"></label>
        <input class="form-control" name="pwd" id="userPassword" type="password" placeholder="Password" />
        <span class="lighting"></span>
      </div>
      <button type="submit" id="login" name="Submit">Login</button>
     
    </form>
  </div>
</div>
<!-- partial -->
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js'></script>
<script  src="./script.js"></script>
</body>
</html>
