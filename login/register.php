<?php
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
  <title>SB Admin - Start Bootstrap Template</title>
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
swal("Username Taken","Error!","info"); }

</script>
    <style> .error {color: #FF0000;text-align:left;}</style>
</head>

<body class="bg-dark">
    <?php
        $namecheck=$emailcheck=$phonecheck=$passwordcheck="";
        $nameerr= $emailerr= $phoneerr= $passworderr=$cpassworderr="";
    $conf1=$conf="";
        if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
	 
	 
	 
  if (empty($_POST["name"]))
   {
    $nameerr = "Name is required";
  } 
  else
   {
    $namecheck = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$namecheck)) 
	{
      $nameerr = "Only letters and white space allowed"; 
    }
  }
            
            
            if (empty($_POST["email"])) {
    $emailerr = "Email is required";
  } else {
    $emailcheck = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($emailcheck, FILTER_VALIDATE_EMAIL)) {
      $emailerr = "Invalid Email format"; 
    }
  }
    if (empty($_POST["phoneno"])) {
    $phoneerr = "Phone no is required";
  } else {
    $phonecheck =$_POST["phoneno"];
    // check if name only contains letters and whitespace
    if (strlen($phonecheck)<10) {
      $phoneerr = "Maximum  10 digits!"; 
    }
    }
        
          
  if (empty($_POST["password"])) {
    $passworderr = "Password is required";
  } else {
    $passwordcheck = test_input($_POST["password"]);
if(!preg_match('/^\w{4,32}$/', $passwordcheck)){
 $passworderr ="Must have atleast 4 characters!  ";
}
}
             if (empty($_POST["cpassword"])) {
    $cpassworderr = "Password Confirmation is required";
  } else {
    $conf1 = test_input($_POST["cpassword"]);
	if(($_POST["password"])==$conf1)
	$conf=$conf1;
	else 
	$cpassworderr="Mismatch";
  }
            
    }
  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
        
        
        ?>
    
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                  <div class="error"><?php echo "*".$nameerr;?></div>
                <label for="exampleInputName">Name</label>
                <input class="form-control"  type="text"  placeholder="Enter Name" name="name" value="<?php echo $namecheck;?>">
              </div>
              <div class="col-md-6">
                  <div class="error"><?php echo "*".$phoneerr;?></div>
                <label for="exampleInputLastName">Phone Number</label>
                <input class="form-control"  type="text"  placeholder="Enter Phone number" name="phoneno" value="<?php echo $phonecheck;?>">
              </div>
            </div>
          </div>
          <div class="form-group">
              <div class="error"><?php echo "*".$emailerr;?></div>
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control"  type="text"  placeholder="Enter email" name="email" value="<?php echo $emailcheck;?>">
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                   <div class="error"><?php echo "*".$passworderr;?></div>
                <label for="exampleInputPassword1">Password</label>
                <input class="form-control"  type="password" placeholder="Password" name="password" >
              </div>
              <div class="col-md-6">
                   <div class="error"><?php echo "*".$cpassworderr;?></div>
                <label for="exampleConfirmPassword">Confirm password</label>
                <input class="form-control"  type="password" placeholder="Confirm password" name="cpassword" value="">
              </div>
            </div>
          </div>
          <input type="submit" class="btn btn-primary btn-block" name="Register" value="Register">
        </form>
          <?php
    if(isset($_POST['Register']))
    {
        
         
        $password=$_POST['password'];
        $cpass=$_POST['cpassword']; 
        $name=$_POST['name'];
         $mail=$_POST['email'];
         $phoneno=$_POST['phoneno'];
          
       
         
         if(empty( $nameerr) and empty($emailerr) and empty($phoneerr) and empty($passworderr) and empty($cpassworderr))
         {
            
mysqli_query($con,"insert into tbl_login(password,cpass,status) values('$password','$cpass','user')");

$t=mysqli_query($con,"select max(loginid) from tbl_login");
$f=mysqli_fetch_array($t);
$maxid=$f[0];
        
        mysqli_query($con,"insert into tbl_reg(name,email,phoneno,id) values('$name','$mail','$phoneno',$maxid)");
             echo "<script type='text/javascript'> myFunction();</script>";
            
    }
         
    }
    
    ?>
        <div class="text-center">
          <a class="d-block small mt-3" href="login.php">Login Page</a>
          
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
      
</body>

</html>
