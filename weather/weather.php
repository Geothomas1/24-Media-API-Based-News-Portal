<!DOCTYPE html>
<html lang="en">
<?php
include("../Database-connection/conn.php");
?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>weather</title>
  <!-- Bootstrap core CSS-->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
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
    background:red; 
    display: table;
    color: #fff;
text-decoration: none; 
        }
table {
	width: 700px;
	border-collapse: collapse;
	overflow: hidden;
	box-shadow: 0 0 20px rgba(0,0,0,0.1);
}

th,
td {
	padding: 15px;
	background-color: rgba(255,255,255,0.2);
	color: black;
}

th {
	text-align: left;
}
    
    </style>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="#">User Home</a>
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
              <a href="..//login/viewlocalnews.php">Local News</a>
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
              <a href="../live/live.php">Live Streaming</a>
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
          <form class="form-inline my-2 my-lg-0 mr-lg-2" method="post" action="../searchnews.php" target="_blank">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for News..." name="searchnews">
              <span class="input-group-append">
                <a href="../searchnews.php" target="_blank">    <button class="btn btn-primary" type="button">
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
          <h1>Weather Report</h1>
          </li>
      </ol>
       <center>
                <form method="post">
           <label>
    <select name="place">
        <option selected> Select Place </option>
        <option>Adilabad</option>
<option>Agra</option>
<option>Ahmedabad</option>
<option>Ahmednagar</option>
<option>Aizawl</option>
<option>Ajitgarh</option>
<option>Ajmer</option>
<option>Akola</option>
<option>Alappuzha</option>
<option>Aligarh</option>
<option>Alirajpur</option>
<option>Allahabad</option>
<option>Almora</option>
<option>Alwar</option>
<option>Ambala</option>
<option>Amravati</option>
<option>Amritsar</option>
<option>Anand</option>
<option>Anantapur</option>
<option>Anantnag</option>
<option>Angul</option>
<option>Anjaw</option>
<option>Anuppur</option>
<option>Araria</option>
<option>Ariyalur</option>
<option>Arwal</option>
<option>Auraiya</option>
<option>Aurangabad</option>
<option>Aurangabad</option>
<option>Azamgarh</option>
<option>Badgam</option>
<option>Bagalkot</option>
<option>Bageshwar</option>
<option>Bagpat</option>
<option>Bahraich</option>
<option>Baksa</option>
<option>Balaghat</option>
<option>Balangir</option>
<option>Balasore</option>
<option>Ballia</option>
<option>Balrampur</option>
<option>Banaskantha</option>
        <option>Banda</option>
<option>Bandipora</option>

<option>Banka</option>
<option>Bankura</option>
<option>Banswara</option>
<option>Barabanki</option>
<option>Baramulla</option>
<option>Baran</option>
<option>Bardhaman</option>
<option>Bareilly</option>
<option>Bargarh</option>
<option>Barmer</option>
<option>Barnala</option>
<option>Barpeta</option>
<option>Barwani</option>
<option>Bastar</option>
<option>Basti</option>
<option>Bathinda</option>
<option>Beed</option>
<option>Begusarai</option>
<option>Belgaum</option>
<option>Bellary</option>
<option>Betul</option>
<option>Bhadrak</option>
<option>Bhagalpur</option>
<option>Bhandara</option>
<option>Bharatpur</option>
<option>Bharuch</option>
<option>Bhavnagar</option>
<option>Bhilwara</option>
<option>Bhind</option>
<option>Bhiwani</option>
<option>Bhojpur</option>
<option>Bhopal</option>
<option>Bidar</option>
<option>Bijapur</option>
<option>Bijnor</option><>
<option>Bikaner</option>
<option>Bilaspur</option>
<option>Birbhum</option>
<option>Bishnupur</option>
<option>Bokaro</option>
<option>Bongaigaon</option>
<option>Boudh</option>
<option>Budaun</option>
<option>Bulandshahr</option>
<option>Buldhana</option>
<option>Bundi</option>
<option>Burhanpur</option>
<option>Buxar</option>
<option>Cachar</option>
<option>Chamarajnagar</option>
<option>Chamba</option>
<option>Chamoli</option>
<option>Champawat</option>
<option>Champhai</option>
<option>Chandauli</option>
<option>Chandel</option>
<option>Chandigarh</option>
<option>Chandrapur</option>
<option>Changlang</option>
<option>Chatra</option>
<option>Chennai</option>
<option>Chhatarpur</option>
<option>Chhindwara</option>
<option>Chikkaballapur</option>
<option>Chikkamagaluru</option>
<option>Chirang</option>
<option>Chitradurga</option>
<option>Chitrakoot</option>
<option>Chittoor</option>
<option>Chittorgarh</option>
<option>Churachandpur</option>
<option>Churu</option>
<option>Coimbatore</option>
<option>Cuddalore</option>
<option>Cuttack</option>
        <option>Changanacherry</option>
<option>Dahod</option>
<option>Daman</option>
<option>Damoh</option>
<option>Dantewada</option>
<option>Darbhanga</option>
<option>Darjeeling</option>
<option>Darrang</option>
<option>Datia</option>
<option>Dausa</option>
<option>Davanagere</option>
<option>Debagarh </option>)
<option>Dehradun</option>
<option>Deoghar</option>
<option>Deoria</option>
<option>Dewas</option>
<option>Dhalai</option>
<option>Dhamtari</option>
<option>Dhanbad</option>
<option>Dhar</option>
<option>Dharmapuri</option>
<option>Dharwad</option>
<option>Dhemaji</option>
<option>Dhenkanal</option>
<option>Dholpur</option>
<option>Dhubri</option>
<option>Dhule</option>
<option>Dibrugarh</option>
<option>Dima Hasao</option>
<option>Dimapur</option>
<option>Dindigul</option>
<option>Dindori</option>
<option>Diu</option>
<option>Doda</option>
        <option>Dumka</option>
    <option>Dungapur</option>
        <option>Durg</option>
        <option>Kottayam</option>
        <option>Kochi</option>
        
        
        
    </select>
</label>  
                    <input type="submit" class="label" value="Submit" name="submit">
           </form>
        </center>
      <center>
        <?php
        error_reporting(0);
        if(isset($_POST['submit']))
        {
            $getplace=$_POST['place'];
            $url = "http://api.weatherstack.com/current?access_key=122a71f70f113a3ee2f7d4fc688c6abc&query=".$getplace;
    
    $ch = curl_init();  
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    
    $json_output=curl_exec($ch);
    $weather = json_decode($json_output);
           
    
    echo "<h2>Location</h2>";
    echo "<table>";
    echo "<tr>";
    echo "<th>City: </th><td>".$weather->location->name."</td>";
    echo "</tr>";        
    echo "<tr>";
    echo "<th>Region: </th><td>".$weather->location->region."</td>";
    echo "</tr>";
            echo "<tr>";
    echo "<th>Country: </th><td>".$weather->location->country."</td>";
    echo "</tr>";
            echo "<tr>";
    echo "<th>Lat: </th><td>".$weather->location->lat."</td>";
            echo "</tr>";
            echo "<tr>";
    echo "<th>Lon:</th><td>".$weather->location->lon."</td>";
            echo "</tr>";
            echo "</table>";
            echo "<br>"; 
            echo "<h2>Temprature</h2>";
            echo "<table>"; 
            echo "<tr>";
            
    echo "<th>Observation_Time (&deg;C):</th><td>" . $weather->current->observation_time; echo "</td>";
            echo "</tr>";
            echo "<tr>";
    echo "<th>Temperature (&deg;C)</th><td>". $weather->current->temperature."</th>";
            echo "</tr>";
            echo "<tr>";
    echo "<th>Weather_code: </th><td>" . $weather->current->weather_code; echo "</td>";
    echo "</tr>";
            
    
    echo "</table>";
            echo "<br>";
           
            echo "<h2>Wind</h2>";
             echo "<table>";
echo "<tr>";
    echo "<th>".$weather->current->wind_speed." mph </th>";
            echo "</tr>";
            echo "<tr>";
    echo "<th>".$weather->current->pressure." atm </th>";
            echo "</tr>";
            echo "<tr>";
    echo "<th>".$weather->current->wind_degree."&deg;  " . $weather->current->wind_dir."</th>";
            echo "</tr>";
    echo "<th>Humidity: ".$weather->current->humidity;
    echo "</th></tr></table>";
    
   
        
        }
        ?>
        
        
     </center>
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
          <div class="modal-body">Are You  Sure Want  to Logout.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="../logout/logout.php">Logout</a>
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
    <script src="../vendor/datatables/jquery.dataTables.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="../js/sb-admin-datatables.min.js"></script>
  </div>
</body>

</html>
