<?php
error_reporting(0);
include("connection.php");
include("header.php");
?>
<!----------------validation code------------------->
<?php
$count="";
if(isset($_POST['btn_submit']))
{
$fname=$_POST['name'];
if($fname=="")
{
$n2="Enter your name";
$count++;
}
$email=$_POST['email'];
if($email=="")
{
$n3="email";
$count++;
}

$pwd=$_POST['pwd'];
if($pwd=="")
{
$n4="Enter your Password";
$count++;
}
$cpwd=$_POST['cpwd'];
if($cpwd=="")
{
$n5="cpwd";
$count++;
}
}
?>
<!----------------------Update code--------------------->
<?PHP
if(isset($_POST['btn_submit']))
{
  $insert_category="update `user` set name='$name',email='$email' ,pwd='$pwd' ,cpwd='$cpwd'  where id='$_GET[id]'";
$query=mysqli_query($connection,$insert_category);
if($query)
{
?><script>alert("Record Updated Successfully...");window.location.href="user.php";</script><?php
}
}
?>
<?php
$select_cat="select * from user`` where id='$_GET[id]'";
$query=mysqli_query($connection,$select_cat);
$row_category=mysqli_fetch_array($query);
?>
<!------------------------html code--------------->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header"></div>
        <div class="card-body">
          <form method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
              <div class="form-row">
                 <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="name" class="form-control" name="name" value="<?php echo $row_category['name'];?>">
                    <label for="name">Name</label>
                  </div>
          <div style="color:red;"><?php echo $n2;?></div>
                </div>


        
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="email" class="form-control" name="email"value="<?php echo $row_category['email'];?>">
                    <label for="Email">Email</label>
                  </div>
          <div style="color:red;"><?php echo $n3;?></div>
                </div>
              </div>
            
       <br>
        
        <div class="form-group">
                  <div class="form-label-group">
                    <input type="text"  class="form-control" name="pwd"value="<?php echo $row_category['pwd'];?>">
                    <label>Password</label>
                  </div>
          <div style="color:red;"><?php echo $n4;?></div>
                </div>
        <div class="form-group">
                  <div class="form-label-group">
                    <input type="text"  class="form-control" name="cpwd"value="<?php echo $row_category['cpwd'];?>">
                    <label>Confirm Password</label>
                  </div>
          <div style="color:red;"><?php echo $n5;?></div>
                </div>      
</div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="submit" name="btn_submit">submit</button>
            
          </div>
                </div>
              </div>
            </div>
            
          </form>
          
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>

