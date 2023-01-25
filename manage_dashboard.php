<?php
error_reporting(0);
include("header1.php");
include("connection.php");



if($_GET['delete_value'])
{
    $delete="delete from dashboard where id='$_GET[delete_value]'";
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
                    <h1 class="page-header">profile</h1>
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
                                        <th>Mobile Number</th>
                                        <th>DOB</th>
                                        <th>Address</th>
                                        <th>Occu. Address</th>
                                        <th>Add</th>
                                        <th>Actions</th>
                                        </tr>
                                </thead>
                                <tbody>
<?php
$n=1;
$select="select * from dashboard";
$query=mysqli_query($connection,$select);
while($row=mysqli_fetch_array($query))
{
  ?>

                                 <tr class="odd gradeX">
                                        <td><?php echo $n++;?></td>
        <td><?php echo $row['fname'];?></td>
        <td><?php echo $row['lname'];?></td>
        <td><?php echo $row['mobile'];?></td>
        <td><?php echo $row['dob'];?></td>
        <td><?php echo $row['hadd'];?></td>
        <td><?php echo $row['oadd'];?></td>
     <td> <a href="Dashboard.php">Add</a></td>
    <td> <a href="manage_dashboard.php?delete_value=<?php echo $row['id'];?>"><img src="images/delete(1).png" title="Delete" style="cursor:pointer; width:18px; height:18px" /></a>
         
         <a href="edit_dashboard.php?id=<?php echo $row['id'];?>"><img src="images/edit(1).png" title="Edit" style="cursor:pointer; width:18px; height:18px" /></a>
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

 

</body>

</html>
