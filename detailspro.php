<?php
error_reporting(0);
include("header1.php");
include("detailsconn.php");



if($_GET['delete_value'])
{
    $delete="delete from details where id='$_GET[delete_value]'";
    $query=mysqli_query($connection,$delete);
    if($query)
    {
        ?>
        <script>alert("Delete Record");</script>
        <?php
    }
}
?> 

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>


<meta property="og:title" content="The Rock" />
<meta property="og:type" content="video.movie" />
<meta property="og:description" content="The Rock" />
<meta property="og:url" content="https://www.imdb.com/title/tt0117500/" />
<meta property="og:image" content="https://ia.media-imdb.com/images/rock.jpg" />


<style>
    
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  
  top: 0;
  width: 85%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  /background-color: rgb(0,0,0); / Fallback color //
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  float: right;
padding: 20px;
  padding-left: 400px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

</style>








    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>


    

        
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Contact profile</h1>
                </div>
                            <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">

                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Sr.No</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Mobile Number</th>
                                        <th>Gender</th>
                                        <th>DOB</th>
                                        <th>Address</th>
                                        <th>Occu. Address</th>
                                        <th>city</th>
                                        <th>state</th>
                                        <th>Add</th>
                                        <th>Actions</th>
                                        </tr>
                                </thead>
                                <tbody>
<?php
$n=1;
$select="select * from details";
$query=mysqli_query($connection,$select);
while($row=mysqli_fetch_array($query))
{
  ?>

                                    <tr class="odd gradeX">
                                        <td><?php echo $n++;?></td>
        <td><?php echo $row['fname'];?></td>
        <td><?php echo $row['lname'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['mobile'];?></td>
        <td><?php echo $row['gender'];?></td>
        <td><?php echo $row['dob'];?></td>
        <td><?php echo $row['hadd'];?></td>
        <td><?php echo $row['oadd'];?></td>
        <td><?php echo $row['oadd'];?></td>
        <td><?php echo $row['oadd'];?></td>
     <td> <a href="details.php">Add</a></td>
    <td> 


<a id="myBtn"  href="#"><img src="images/share.png" title="Share" style="cursor:pointer; width:18px; height:18px" /></a>
  
  
<div id="myModal" class="modal">

  <div class="modal-content" style="margin-right: 100px;">
    <span class="close">&times;</span>

    <a title="Share to Pinterest" target="_blank" href="http://pinterest.com/pin/create/button/?url=https://techhyme.com/"><img src="images/pinterest.png" title="Share" style="cursor:pointer; 
    width:50px; height:50px" /></a>
 
    <a title="Share to Linkedin" target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url=https://techhyme.com/"><img src="images/linkedin1.png" title="Share" 
        style="cursor:pointer; width:40px; height:40px" /></a>


    <a title="Share to Twitter" target="_blank" href="http://twitter.com/share?text=Go and Checkout our blog &url=https://techhyme.com/ &hashtags=techhyme,blog,tech"><img src="images/twitter.png" title="Share" 
        style="cursor:pointer; width:40px; height:40px" /></a>


    <a title="Share to Facebook" target="_blank" href="http://www.facebook.com/sharer.php?u=https://techhyme.com/"><img src="images/fb.png" title="Share" style="cursor:pointer; width:40px; height:40px" /></a>



  </div>

</div>



        <a href="detailsprofile.php?delete_value=<?php echo $row['id'];?>"><img src="images/delete(1).png" title="Delete" style="cursor:pointer; width:18px; height:18px" /></a>
         
         <a href="edit_details.php?id=<?php echo $row['id'];?>"><img src="images/edit(1).png" title="Edit" style="cursor:pointer; width:18px; height:18px" /></a>






               </td>
                                    </tr>
                                    <?php
}
                                    ?>                            </tbody>
                            </table>
                            <!-- /.table-responsive -->
                           
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
           
            
        <!--</div>-->
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

 <script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>




<script>
function myFunction() {
  var txt;
  if (confirm("Press a button!")) {
    txt = "You pressed OK!";
  } else {
    txt = "You pressed Cancel!";
  }
  document.getElementById("demo").innerHTML = txt;
}
</script>






</body>

</html>