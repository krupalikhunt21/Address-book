<?php
include "header.php";
if (isset($errorMsg)) {
 echo "<h1 class='message'>".$errorMsg. "</h1>";
}
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Register </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="register.css">
<script type="text/javascript">
  const form = document.getElementById('form');

form.addEventListener('submit', function handleSubmit(event) {
  event.preventDefault();

  //  Send data to server here

  //  Reset form here
  form.reset();
});

</script>
<style type="text/css">
  .header {
  overflow: hidden;
  background-color: #c1c1c1;
  padding: 20px 10px;
}

/* Style the header links */
.header a {

  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  line-height: 25px;
  border-radius: 4px;
}

/* Style the logo link (notice that we set the same value of line-height and font-size to prevent the header to increase when the font gets bigger */
.header a.logo {
  font-size: 25px;
  font-weight: bold;
box-shadow:1px 1px 0px 0px black ;
  border: 2px solid white ;
  border-radius: 40px;
}

/* Change the background color on mouse-over */
.header a:hover {
  
  border: 2px solid white ;
    font-color:white; 
    box-shadow:1px 1px 0px 0px black ;
  background-color: ;
  border-radius: 10px;
  color: black;
}

/* Style the active/current link*/
.header a.active {

  color: black;
}

/* Float the link section to the right */
.header-right {
  float: right;
}

</style>
<body>

  <form autocomplete="off"
method="post" action="regprocess.php" onSubmit="return validate(this);" name="form">


    <?php include ("signin.php"); 
    if (isset($errorMsg))
{
echo "<h1 class='message'>" .$errorMsg. "</h1>";
}
?>

<div class="wrapper">
  <div class="inner-warpper text-center">
    <h2 class="title">Registration page</h2>
    

      <div class="input-group">
        <label class="palceholder" for="FullName"></label>
        <input  required class="form-control" name="fn" id="UserName" type="text" placeholder="User Name" value="<?php if(isset($fullname)){echo
$fullname;} ?>" <?php if(isset($code) && $code == 1){ echo "autofocus"; } ?>
/>
 
        <span class="lighting"></span>
      </div>
      <div class="input-group">
        <label class="palceholder" for="UserEmail"></label>
        <input class="form-control" name="UserEmail" id="UserEmail" type="text" placeholder="UserEmail" value="<?php if(isset($UserEmail)){echo $UserEmail;} ?>" <?php if(isset($code) && $code == 2){ echo "autofocus"; } ?> /> 
        <span class="lighting"></span>
      </div>
      
        <div class="input-group">
        <label class="palceholder" for="Password"></label>
        <input type="password" class="form-control" name="Password" id="Password" type="text" placeholder="Password" value="<?php if(isset($password)){echo $password;} ?>" <?php if(isset($code) && $code
== 4){ echo "autofocus"; } ?> />
 
        <span class="lighting"></span>
      </div>
      <div class="input-group">
        <label class="palceholder" for="ConfirmPassword"></label>
        <input type="password" class="form-control" name="ConfirmPassword" id="ConfirmPassword" type="text" placeholder="Confirm Password" 
        value="<?php if(isset($confirmpassword)){echo $confirmpassword;} ?>" <?php if(isset($code) && $code
==5){ echo "autofocus"; } ?> />

        <span class="lighting"></span>
      </div>
      <button type="submit" name="Submit" id="Sign Up">Sign Up</button>
      <div class="clearfix supporter">
      </div>
  </div>
  <div class="signup-wrapper text-center">

  </div>
</div>


<!-- partial -->
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js'></script><script  src="./script.js"></script>

</form>
</body>
</html>
