
<!DOCTYPE html>
<?php
error_reporting(0);
include("../Database-connection/conn.php");

session_start();
$d=$_SESSION['id'];
 $idd=$_GET['idd'];
$passid=$_GET['pid'];
if($idd=="")
{
    $idd=$passid;
}

if($d=='')
{
	
header("location:../index.php");
}
?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin Home</title>
  <!-- Bootstrap core CSS-->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">
    <style>
    
      .label:hover{
            cursor: pointer;
         text-decoration: none;
         color: black;
          
        }
        
        
         .label{
    padding: 10px;
    background:green; 
    display: table;
    color: #fff;
text-decoration: none; 
        }
    .label1:hover{
            cursor: pointer;
         text-decoration: none;
         color: black;
          
        }
        
        
         .label1{
    padding: 10px;
    background:red; 
    display: table;
    color: #fff;
text-decoration: none; 
        }
    
    </style>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Admin Home</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="adminhome.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Home</span>
          </a>
        </li>
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Admin Activity</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="viewuser.php">View Users</a>
            </li>
            
              <li>
              <a href="addportal.php">Add Countries and categories</a>
            </li>
              <li>
              <a href="addpublishers.php">Add by Publishers</a>
            </li>
              <li>
              <a href="addchannel.php">Add Live Channels</a>
            </li>


          </ul>
        </li>
        
          
        
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">View Added Data</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="viewportal.php">Country With Code</a>
            </li>
            <li>
              <a href="viewpublisher.php">By Publication</a>
            </li>

            <li>
              <a href="viewchannellist.php">By Live Channels</a>
            </li>
          </ul>
        </li>
       
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          </li>
       
       
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
          
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
   <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <?php
            
            
            $result1=mysqli_query($con,"select * from tbl_reg where id='$idd'");

while($row1=mysqli_fetch_array($result1))
{
$name1=$row1[1];
            ?>
          <h2>News By <?php echo "&nbsp".$name1;?></h2>
        </li>
        <?php
    
}
            ?>
      </ol>
      <!-- Example DataTables Card-->
      
                     <?php
   
$result=mysqli_query($con,"select * from tbl_addnews where checkid='$idd'");
$l=mysqli_num_rows($result);
while($row=mysqli_fetch_array($result))
{
    $newsid=$row[0];
$heading=$row[1];
$date=$row[2];
$data=$row[3];

$image=$row[5];
    $status=$row[6];
 
if($status=='notupdate')
{
    $print="Update";
}else
{
    $print="Cancel";
}

    ?>
                 <?php echo $heading;?>
       <br>
                <img src="../login/myfolder/<?php echo $image;?>" style='width:100px;height:100px;'>
                  <?php echo $date;?>
                  <?php echo $data;?>
                  <?php 
         if($status=='notupdate')
         {
                  echo "<a href='uc.php?uc=update&newsid=$newsid&passid=$idd' class='label'> $print</a>";
          }else
      {
      echo "<a href='uc.php?uc=cancel&newsid=$newsid&passid=$idd' class='label1'>$print</a>";
      }
      ?>
                <?php
     
}
             
                  ?>
              
  
      
       
    
        
        
        
        
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2020</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Are You  Sure Want  to Logout.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="../logout/logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    
    

      
       <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="../vendor/datatables/jquery.dataTables.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <!-- Custom scripts for this page-->
    <script src="../js/sb-admin-datatables.min.js"></script>
      
      
      
      
      
  </div>
    
    </div>
</body>

</html>

