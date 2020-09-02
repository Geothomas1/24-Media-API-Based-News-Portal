<?php
error_reporting(0);
include("../Database-connection/conn.php");
session_start();
if(isset($_SESSION[uid]))
{
    header("location:userhome.php");
}
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
swal("Wrong Input By You Or Feild is Empty","Error!","info"); }

</script>
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">User Login </div>
      <div class="card-body">
        <form method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
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
        <div class="text-center">
          <a class="d-block small mt-3" href="register.php">Register an Account</a>
          
             <a class="d-block small" href="../index.php">Home</a>
        </div>
      </div>
    </div>
  </div>
    <?php
     if(isset($_POST['Login']))
    {
               
        $email=$_POST['email'];
        $password=$_POST['password'];
        $result="select * from tbl_reg where email='$email'";
$res=mysqli_query($con,$result);
 $num=mysqli_num_rows($res);
 $num1=mysqli_fetch_array($res);
  $id=$num1[4];
         
         //select from user login table
         
         $result1="select * from tbl_login where loginid='$id'";
$res1=mysqli_query($con,$result1);
 $numl2=mysqli_num_rows($res1);
 $nums3=mysqli_fetch_array($res1);
        
    $password1=$nums3[1];
    $status=$nums3[3];     
         
    
   session_start();     

if($num==1 and $numl2==1 and $status=='user' and $password==$password1)
{
    
$_SESSION['uid']=$id;
header('location:userhome.php');
}
else
{
    
     echo "<script type='text/javascript'> myFunction2();</script>";
}
    }
    ?>
  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jmysqli/jmysqli.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="../vendor/jmysqli-easing/jmysqli.easing.min.js"></script>
    
    
    
</body>

</html>
