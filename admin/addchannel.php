
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
  <title>Admin</title>
  <!-- Bootstrap core CSS-->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">
     <link href="../css/sweetalert.css" rel="stylesheet" type="text/css">
    <script src="../js/sweetalert.min.js"></script>
    <script>
 function myFunction() { 
     swal({
  title: "Success!",
  text: "Add News Via Country Successfully",
  imageUrl: '../admin/icons/thumbs-up.jpg'
});
 }

 function myFunction2() { 
swal("Something Wrong","Error!","info"); }
function myFunction3() {
        swal("Sorry!", "Channel Is Already Added!", "error");
}
    </script>
    <style>
        .back{
  background:url(../images/Gears1440.jpg);
            background-size: cover;
  
  font-family: 'Open Sans', sans-serif; 
  margin:20px auto;
            
}
    .cform{
  margin:auto;
  width:300px;
  border:5px solid rgba(255,255,255,0.2);
  border-radius:5px;
}
.cform .title{
  width:100%;
  height:35px;
  background:#65A832;
  text-align:center;
  background:-webkit-linear-gradient(top, #65A832 0%, #5E9C2F 85%, #5A972C 100%);
  background:-moz-linear-gradient(top, #65A832 0%, #5E9C2F 85%, #5A972C 100%);
  background:-o-linear-gradient(top, #65A832 0%, #5E9C2F 85%, #5A972C 100%);
  color:#FFF;
  font-size:20px;
  border-radius:3px 3px 0 0;
  padding-top:10px;
}
.cform .title:after{
  content:'';
  border-top: 6px solid #5A972C;
	border-left: 6px solid transparent;
	border-right: 6px solid transparent;
  display:block;
  position:absolute;
  margin:35px 15px;
}
.cform .title  span{
  position:absolute;
  display:block;
  margin-left:75px;
}
.cform .form{
  background:#FFF;
  width:100%;
  font-family:;
  margin:auto;
  text-align:center;
  padding:10px 0;
}
.cform .form div{
  text-align:justify;
  margin-left:34px;
  padding:5px 0;
}
.cform .form input[type="text"],textarea{
  padding:15px;
  outline:none;
  width:170px;
  height:30px;
  border:3px solid #DEDEDE;
  border-radius:5px;
  font-family: 'Open Sans', sans-serif;
  font-size:11px;
  transition:linear 0.4s;
    color:black;
  font-size: 15px;
}
        .cform .form input[type="password"],textarea{
  padding:15px;
  outline:none;
  width:170px;
  height:30px;
  border:3px solid #DEDEDE;
  border-radius:5px;
  color:black;
  font-size: 10px;
  font-family: 'Open Sans', sans-serif;
  font-size:11px;
  transition:linear 0.4s;
}
.cform .form textarea:focus{
  height:70px;
}
.cform .btn{
  background:#F3F3F3;
  text-align:center; 
  border-radius:0 0 3px 3px;
  border-top:1px solid #EEE;
  padding:5px;
}
.cform .btn input[type="submit"]{
  background:#65A832;
  background:linear-gradient(top, #65A832 0%, #5E9C2F 85%, #5A972C 100%);
  padding:10px;
  border:none;
  border-radius:5px;
  box-shadow:0px 1px 1px #54892C;
  color:#FFF;
  cursor:pointer;
  font-family: 'Open Sans', sans-serif;
}
    .error {color: #FF0000;text-align: right;}
    
    </style>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <?php
        $cname1=$ccode1="";
        $cnameerr=$ccodeerr="";
        if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
	 
	 
	 
  if (empty($_POST["cname"]))
   {
    $cnameerr = "Channel Name is required";
  } 
  else
   {
    $cname1 = test_input($_POST["cname"]);
    // check if name only contains letters and whitespace
    
  }
            
            
    if (empty($_POST["ccode"])) {
    $ccodeerr = "Channel Url is requied";
  } else {
    $ccode1 =$_POST["ccode"];
    // check if name only contains letters and whitespace

    }
        
          
    }
  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
        
        
        ?>
    
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
          <h2>Add Live Channels</h2>
        </li>
        
      </ol>
       <div class="back">
       <center>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data" >
          <section class="cform">
             <article class="form">
                 <div class="error"><?php echo "*".$cnameerr;?></div>
                 <div>Enter Channel Name</div>
       <input type="text" name="cname" placeholder="Like Sky News" value="<?php echo $cname1;?>"><br>
                 <div class="error"><?php echo "*".$ccodeerr;?></div>
                 <div>Enter Channel ID</div>
          <input type="text" name="ccode" placeholder="v6j9re-ie" value="<?php echo $ccode1;?>"><br>
                 <div>Select Channel Icon</div>
          <input type="file" name="f1" ><br>
                      <article class="btn">
          <input type="submit" name="addportal" value="Add Channel">
                          <br>
                          
                       </article>
                  </article>
                 <a href="addchannel.php" style="color:blue;text-decoration:none;">Add Another Channel</a> 

          </section>
       </form>
</center>
           <br><br>
    </div>
       
    
        
    
    <?php
       if(isset($_POST['addportal']))
        {
           $cname=$_POST['cname'];
           $curl=$_POST['ccode'];
           $photo=$_FILES['f1']['name'];
           $result="select * from tbl_channel where cname='$cname' or curl='$curl' or cimage='$photo'";
$res=mysqli_query($con,$result);
  $num=mysqli_num_rows($res);
  $num1=mysqli_fetch_array($res);
 
if($num==0)
 {
    if(!empty($cname) and !empty($curl) and !empty($photo))
 {
           
           move_uploaded_file($_FILES["f1"]["tmp_name"],"../admin/news/".$_FILES["f1"]["name"]);
           if(empty($cnameerr) and empty($ccodeerr))
           {
            mysqli_query($con,"insert into tbl_channel(cname,curl,cimage) values('$cname','$curl','$photo')");
            echo "<script type='text/javascript'> myFunction();</script>";
           
          }else
           {
              echo "<script type='text/javascript'> myFunction2();</script>";  
           }
    }
    }else
{
   echo "<script type='text/javascript'> myFunction3();</script>"; 
    
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
          <div class="modal-body">Are You  Sure Want  to Logout</div>
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

