<?php
error_reporting(0);
include("../Database-connection/conn.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Login</title>
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
swal("Registered","Successfully!","success"); }

 function myFunction2() { 
swal("Wrong Username Or Password","Error!","info"); }

</script>
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Admin Login Platform</div>
      <div class="card-body">
        <form method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input class="form-control" id="exampleInputEmail1" type="password" aria-describedby="emailHelp" placeholder="Enter Admin Username" name="username">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password" name="password">
          </div>
          <div class="form-group">
            <div class="form-check">
              
            </div>
          </div>
          <input type="submit" class="btn btn-primary btn-block" value="Login" name="Login">
        </form>
        
      </div>
    </div>
  </div>
    <?php
     if(isset($_POST['Login']))
    {
               
        $username=$_POST['username'];
         $password=$_POST['password'];
        $result="select * from tbl_login where username='$username' and password='$password'";
$res=mysqli_query($con,$result);
 $num=mysqli_num_rows($res);
 $num1=mysqli_fetch_array($res);
 $id=$num1[0];
session_start();     
 $status=$num1[3];
if($num==1 && $status=='admin')
{
 $_SESSION['id']=$id;
header('location:adminhome.php');
}else
{
    echo "<script type='text/javascript'> myFunction2();</script>";
    
    }
    
    }
    ?>
  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    
    
    
</body>

</html>
