
<!DOCTYPE html>
<?php
include("../Database-connection/conn.php");
session_start();
$d=$_SESSION['id'];
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
  <title>Alert</title>
  <!-- Bootstrap core CSS-->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">
    <link href="../css/sweetalert.css" rel="stylesheet" type="text/css">
    <script src="../js/sweetalert.min.js"></script>
    <style>
    .input {
  border: 1px solid #c4c4c4;
  border-radius: 5px;
  background-color: #fff;
  padding: 3px 5px;
  box-shadow: inset 0 3px 6px rgba(0,0,0,0.1);
  width: 230px;
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
             border: 1px solid #c4c4c4;
  border-radius: 5px;
             width: 190px;
             
        }

        .error{
            color: red;
        }
    </style>
    <script>
 function myFunction() { 
swal("Send","Successfully!","success"); 
 }
        
</script>
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
     <?php
        $messagecheck=$messageerr="";
        if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
	 
	 
	 
  if (empty($_POST["alert"]))
   {
    $messageerr = "Message is required";
  } 
  else
   {
    $messagecheck = test_input($_POST["alert"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$messagecheck)) 
	{
      $messageerr = "Only letters and white space allowed"; 
    }
  }
            
            
            
    }
  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
        
        
        ?>
    
    
    
  <div class="content-wrapper">

      <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">

        <li class="breadcrumb-item">
        <?php
            $idd=$_GET['idd'];
            $result1=mysqli_query($con,"select * from tbl_reg where id='$idd'");

while($row1=mysqli_fetch_array($result1))
{
$name1=$row1[1];
    
                 
            
            ?>
            <h1> Message to  <?php echo $name1;?></h1>
        </li>
        <?php
}
    ?>
      </ol>
      <center>
          <br><br><br>
       <form method="post" >
           <div class="error"><?php echo "*".$messageerr;?></div>
       <input type="text" name="alert" placeholder="Input Message" class="input">
           <br><br>
           
       <input type="submit" name="sub" value="Send" class="label" >
       
       </form>
       </center>
       <?php
          if(isset($_POST['sub']))
          {
              $message=$_POST['alert'];
            date_default_timezone_set("Asia/Kolkata");
      $date=date("d/m/y h:i:sa");
              if(empty($messageerr))
              {
                  
mysqli_query($con,"insert into tbl_message(userid,message,dt) values($idd,'$message','$date')");
                  echo "<script type='text/javascript'>myFunction();</script>";
              }
          }
          
          ?>
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

