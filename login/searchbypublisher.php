<!DOCTYPE html>

<html lang="en">
<?php
include("../Database-connection/conn.php");
session_start();

$getdata=$_GET['getdata'];
$result=mysqli_query($con,"select * from tbl_publishers where pcode='$getdata'");
while($row=mysqli_fetch_array($result))
{
$pname=$row[1];
$pcode=$row[2];    
?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Search By Publisher</title>
  <!-- Bootstrap core CSS-->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">
   <link rel="stylesheet" href="../css/w3.css">
   <style>
    
  .img {
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 5px;
    width: 200px;
}

.img:hover {
    box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}

.label:hover{
            cursor: pointer;
         text-decoration: none;
         color: black;
        }
        
        
         .label{
    padding: 10px;
    background:#ef104c; 
    display: table;
    color: #fff;
text-decoration: none; 
        }

   
      
    
    </style> 
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="#"> &nbsp;<?php echo $pname."&nbspNews";?> </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      
    </div>
  </nav>
  <div class="content-wrapper">
    <?php
error_reporting(0);
    
$result = file_get_contents("https://newsapi.org/v2/top-headlines?sources=".$pcode."&apiKey=88b894304f86462da17308dc87be662d");
$news = json_decode($result);
    
$count=$news->totalResults;

for($i=0;$i<$count;$i++)
{
  echo '<div id="columns">';

$heading=$news->articles[$i]->title;
$writer=$news->articles[$i]->author;
$desc=$news->articles[$i]->description;
$url=$news->articles[$i]->url;
$img=$news->articles[$i]->urlToImage;
$time=$news->articles[$i]->publishedAt;
    if($img==$heading or $desc=="{{pageDescription}}" or $img==null)
     continue;
 ?>   
<div class="w3-container">
 

  <div class="w3-card-4" style="width:100%">
    <header class="w3-container w3-light-grey">
      <h3><?php echo $heading;?></h3>
    </header>
    <div class="w3-container">
      <h6><?php 
    
    $t=explode('T',$time);
    echo $t[0];

          ?></h6>
      <hr>
        <img src="<?php echo $img;?>"   class="img" style="width:170px">
      <p><?php echo $desc;?></p><br>
    </div>
    <a class="label" href="<?php echo $url;?>" target="_blank">+ Readmore</a>
  </div>
</div>
   <?php 
    }
    
    ?>  
      
        
    
      
     
    
      
     

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
    <?php
}
?>
</body>

</html>
