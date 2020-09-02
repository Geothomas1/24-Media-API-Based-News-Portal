<!DOCTYPE html>

<?php
include("../Database-connection/conn.php");
session_start();
$d=$_SESSION['uid'];
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
  <title>Add Local News</title>
  <!-- Bootstrap core CSS-->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">
    <link href="../css/sweetalert.css" rel="stylesheet" type="text/css">
   <script src="../js/sweetalert.min.js"></script>
<script>

 function myFunction() { 
   swal("Added Successfully!", "Your Local News Added.", "success");
}




</script>
    
    <style>

       .textinput {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    outline: none;
}

.textinput:focus {
    border: 3px solid #555;
}
        .label{
    padding: 10px;
    background: red; 
    display: table;
    color: #fff;
     }



input[type="file"] {
    display: none;
}
        .label:hover{
            cursor: pointer;
        }
        
        
         .labell{
    padding: 10px;
    background: teal; 
    display: table;
    color: #fff;
     }



input[type="submit"] {
    display: none;
}
        .labell:hover{
            cursor: pointer;
        }
        .error {color: #FF0000;text-align: right;}
    </style>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
    <?php
        $headingcheck=$datecheck=$datacheck="";
    $headingerr=$dateerr=$dataerr="";
        if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
	 
	 
	 
  if (empty($_POST["heading"]))
   {
    $headingerr= "Heading required";
  } 
  else
   {
    $headingcheck = test_input($_POST["heading"]);
  }
           
            if (empty($_POST["date"]))
   {
    $dateerr= "Date is Required";
  } 
  else
   {
    $datecheck = test_input($_POST["date"]);
  }
         if (empty($_POST["data"]))
   {
    $dataerr= "News Description is Required";
  } 
  else
   {
    $datacheck = $_POST["data"];
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
    <a class="navbar-brand" href="index.html">User Home</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Home">
          <a class="nav-link" href="../login/userhome.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Home</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="24-Media Home">
          <a class="nav-link" href="../index.php">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">24-Media Home</span>
          </a>
        </li>
       
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="User Activity">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">User Activity</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="addlocalnews.php">Add Local News</a>
            </li>
            
              <li>
              <a href="viewaddednews.php">View Added News</a>
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
          <h1>Add Local News</h1>
          </li>
      </ol>
        <?php
        
$checkid=$_SESSION['uid'];
        
        ?>
 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
    
  <label class="error"> <?php echo "*".$headingerr;?><b style="color:black">Heading</b></label>
  <input type="text" id="fname" name="heading" value="<?php echo $headingcheck;?>" class="textinput" placeholder="Enter News Heading">
      
     <label class="error"><?php echo "*".$dateerr;?><b style="color:black">Date</b></label>
  <input type="date" id="lname" name="date" value="<?php echo $datecheck;?>" class="textinput" placeholder="Enter Date Of News">
      
     <label class="error"><?php echo "*".$dataerr;?><b style="color:black">Description Of News</b></label>
           <textarea rows="5" cols="5" class="textinput" placeholder="Description Of News" name="data" value="<?php echo $datacheck;?>">
           
           
           </textarea>
           <label id="#bb" class="label"> Select News Image
    <input type="file" id="f1"   size="60" name="f1"  >
    </label> 
           <br>
           <center>
            <label class="labell"> Submit News
    <input type="submit"   name="submitnews"  >
    </label> </center>
           
           
</form>
        
        <?php
    if(isset($_POST['submitnews']))
    {
        
         $heading=$_POST['heading'];
         $date=$_POST['date'];
         $data=$_POST['data'];
        
         $photo=$_FILES['f1']['name'];
            move_uploaded_file($_FILES["f1"]["tmp_name"],"../login/myfolder/".$_FILES["f1"]["name"]);
        
         date_default_timezone_set("Asia/Kolkata");
      $dt=date("d/m/y h:i:sa");
         if(empty($headingerr) and empty($dateerr) and empty($dataerr)and !empty($photo))
         {
            
            $qry="insert into tbl_addnews(heading,date,data,checkid,photo,status,dt) values('$heading','$date','$data',$checkid,'$photo','notupdate','$dt')";
mysqli_query($con,$qry);

         
             
      
             echo "<script type='text/javascript'> myFunction();</script>";
            
               

             
        
    }
         
    }
   
    ?>
     
        
        
        
     
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
