<!DOCTYPE html>
<?php
include("../Database-connection/conn.php");
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <title>24-media</title>
  <!-- Bootstrap core CSS-->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">
    <link rel="../stylesheet" href="css/w3.css">
    <style>
     .label:hover{
            cursor: pointer;
         text-decoration: none;
         color:dodgerblue;
        
        }
        
        
         .label{
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
    <a class="navbar-brand" href="index.html">News Media 24-Hours</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="../index.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Home</span>
          </a>
        </li>
        
        
     
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">News Types</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
              <a href="../types/india.php">India</a>
            </li>
              <li>
              <a href="../types/business.php">Business</a>
            </li>
              <li>
              <a href="../types/technology.php">Technology</a>
            </li>
              <li>
              <a href="../types/entertainment.php">Entertainment</a>
            </li>
              <li>
              <a href="../types/sports.php">Sport</a>
            </li>
              <li>
              <a href="../types/science.php">Science</a>
            </li>
              <li>
              <a href="../types/health.php">Health</a>
            </li>
            
              <li>
              <a href="../login/viewlocalnews.php">Local News</a>
            </li>
          </ul>
        </li>
          
             <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Explore News World</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="../login/login.php">Add Local News</a>
            </li>
            <li>
              <a href="../login/newsbycountries.php">News By Countries</a>
            </li>
            <li>
              <a href="../login/newsbypublisher.php">News By Publisher</a>
            </li>
              <li>
              <a href="../newsbydate.php">Search By Date</a>
            </li>
               <li>
              <a href="live.php">Live Streaming</a>
            </li>
            <li>
              <a href="../corona/index.php" target="_blank">Covid19 Tracker</a>
            </li>
          </ul>
        </li>
          
          
          
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Climate Report</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="../weather/weather.php">Weather Report </a>
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
        
        
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2" method="post" action="searchnews.php" target="_blank">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for News..." name="searchnews">
              <span class="input-group-append">
                <a href="searchnews.php" target="_blank">    <button class="btn btn-primary" type="button">
                 <i class="fa fa-search"></i>
                </button></a>
              </span>
            </div>
          </form>
        </li>
        
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">

<div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <h1>Live Streaming Channel List</h1>
        </li>
        
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
        
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Channel Icon</th>
                  <th>Channel Name</th>
                  <th>Explore</th>
                  
                </tr>
              </thead>
              <tfoot>
                <tr>
                 
                  <th>Channel Icon</th>
                  <th>Channel Name</th>
                  <th>Watch Live</th>
                   
                  
                </tr>
              </tfoot>
              <tbody>
                     <?php
$result=mysqli_query($con,"select * from tbl_channel");
$l=mysqli_num_rows($result);
while($row=mysqli_fetch_array($result))
{
$cname=$row[1];
$curl=$row[2];
$cimage=$row[3];
?>
                <tr>
                  <td><img src="../admin/news/<?php echo $cimage;?>" style='width:75px;height:75px;'></td>
                  <td><?php echo $cname;?></td>
                  <td><a class="label" href="watch.php?url=<?php echo $curl;?>" target="_blank">Watch</a></td>
                    
                </tr>
                <?php
     }
                  ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
       
    
        
      
     
    
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © 24 Media 2020</small>
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
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="../vendor/chart.js/Chart.min.js"></script>
    <script src="../vendor/datatables/jquery.dataTables.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="../js/sb-admin-datatables.min.js"></script>
    <script src="../js/sb-admin-charts.min.js"></script>
      </div>
  </div>
</body>

</html>
