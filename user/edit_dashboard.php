<?php
error_reporting(0);
include("connection.php");
include("header1.php");
?>
<!----------------validation code------------------->
<?php
$count="";
if(isset($_POST['btn_submit']))
{


$fname=$_POST['fname'];
if($fname=="")
{
$n2="Enter firsr name";
$count++;
}
$lname=$_POST['lname'];
if($lname=="")
{
$n3="lname";
$count++;
}
////////////ebook_code
$mobile=$_POST['mobile'];
if($mobile=="")
{
$n4="Enter mobile";
$count++;
}

$dob=$_POST['dob'];
if($dob=="")
{
$n5="dob";
$count++;
}
$hadd=$_POST['hadd'];
if($oadd=="")
{
$n6="hadd";
$count++;
}

$oadd=$_POST['oadd'];
if($oadd=="")
{
$n7="oadd";
$count++;
}
}
?>

<!----------------------Update code--------------------->
<?PHP
if(isset($_POST['btn_submit']))
{
  $insert_category="update `dashboard` set fname='$fname' ,lname='$lname' ,mobile='$mobile' ,dob='$dob'  where id='$_GET[id]'";
$query=mysqli_query($connection,$insert_category);
if($query)
{
?><script>alert("Record Updated Successfully...");window.location.href="manage_dashboard.php";</script><?php
}
}
?>


<?php
$select_cat="select * from dashboard`` where id='$_GET[id]'";
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
                    <input type="text" id="fname" class="form-control" name="fname" value="<?php echo $row_category['fname'];?>">
                    <label for="fname">First name</label>
                  </div>
          <div style="color:red;"><?php echo $n2;?></div>
                </div>


        
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="lname" class="form-control" name="lname"value="<?php echo $row_category['lname'];?>">
                    <label for="lname">Last name</label>
                  </div>
          <div style="color:red;"><?php echo $n3;?></div>
                </div>
              </div>
            
       <br>
        
        <div class="form-group">
                  <div class="form-label-group">
                    <input type="text"  class="form-control" name="mobile"value="<?php echo $row_category['mobile'];?>">
                    <label>Mo. No</label>
                  </div>
          <div style="color:red;"><?php echo $n5;?></div>
                </div>
        <div class="form-group">
                  <div class="form-label-group">
                    <input type="date"  class="form-control" name="dob"value="<?php echo $row_category['dob'];?>">
                    <label>Date Of Birth</label>
                  </div>
          <div style="color:red;"><?php echo $n6;?></div>
                </div>



         <div class="form-group">
                  <div class="form-label-group">
                    <input type="text"  class="form-control" name="hadd"value="<?php echo $row_category['hadd'];?>">
                    <label>Home address</label>
                  </div>
          <div style="color:red;"><?php echo $n7;?></div>
                </div>



<div class="form-group">
                  <div class="form-label-group">
                    <input type="text"  class="form-control" name="oadd"value="<?php echo $row_category['oadd'];?>">
                    <label>Occupiance address</label>
                  </div>
          <div style="color:red;"><?php echo $n8;?></div>
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

