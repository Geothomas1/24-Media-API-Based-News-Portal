<!DOCTYPE html>
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
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="css/w3.css">
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
    background: red; 
    display: table;
    color: #fff;
text-decoration: none; 
        }

   [type="date"] {
  background:#fff url(https://cdn1.iconfinder.com/data/icons/cc_mono_icon_set/blacks/16x16/calendar_2.png)  97% 50% no-repeat ;
}
[type="date"]::-webkit-inner-spin-button {
  display: none;
}
[type="date"]::-webkit-calendar-picker-indicator {
  opacity: 0;
}
       [type="date"]:hover{
           cursor: pointer;
       }


label {
  display: block;
}
input {
  border: 1px solid #c4c4c4;
  border-radius: 5px;
  background-color: #fff;
  padding: 3px 5px;
  box-shadow: inset 0 3px 6px rgba(0,0,0,0.1);
  width: 190px;
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
          <a class="nav-link" href="index.php">
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
              <a href="types/india.php">India</a>
            </li>
              <li>
              <a href="types/business.php">Business</a>
            </li>
              <li>
              <a href="types/technology.php">Technology</a>
            </li>
              <li>
              <a href="types/entertainment.php">Entertainment</a>
            </li>
              <li>
              <a href="types/sports.php">Sport</a>
            </li>
              <li>
              <a href="types/science.php">Science</a>
            </li>
              <li>
              <a href="types/health.php">Health</a>
            </li>
            
              <li>
              <a href="login/viewlocalnews.php">Local News</a>
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
              <a href="login/login.php">Add Local News</a>
            </li>
            <li>
              <a href="login/newsbycountries.php">News By Countries</a>
            </li>
            <li>
              <a href="login/newsbypublisher.php">News By Publisher</a>
            </li>
            <li>
              <a href="newsbydate.php">Search By Date</a>
            </li>
               <li>
              <a href="live/live.php">Live Streaming</a>
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
              <a href="weather/weather.php">Weather Report </a>
            </li>
            <li>
              <a href="weather/forcast.php">Weather Forecast</a>
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
  <br><br>
      <center>
<form method="post">
<input type="text" name="keyword" placeholder="Enter the Keyword">
<input type="date" name="d1" id="dateofbirth">
         
        
         <br><br>
          <input type="submit" name="sub" value="Get News" class="label">
          </form>
     </center>
    <?php
      error_reporting(0);
      if(isset($_POST['sub']))
      {
          $keyerr=$dateerr="";
          $date1=$_POST['d1'];
          $keyword=$_POST['keyword'];
          if(empty($keyword))
          {
              $keyerr="Keyword Required";
              echo $keyerr;
          }
          if(empty($date1))
          {
          $dateerr="Date is Required";
              echo $dateerr;
          }
    
      
          $result = file_get_contents("https://newsapi.org/v2/everything?q=".$keyword."&from=".$date1."&to=".$date1."&sortBy=popularity&apiKey=88b894304f86462da17308dc87be662d");
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
    $c1=strpos($img,".jpg") ;
    $c2=strpos($img,".jpge") ;
    $c3=strpos($img,".png");
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
        <img src="<?php echo $img;?>"  alt="Avatar" class="img" style="width:170px">
      <p><?php echo $desc;?></p><br>
    </div>
    <a class="label" href="<?php echo $url;?>">+ Readmore</a>
  </div>
</div>
   <?php 
}
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
</body>

</html>
