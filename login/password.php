<?php
include("../Database-connection/conn.php");
error_reporting(0);

?>
<html>
<head>
    <title>
    Password</title>
    <style>
    @import "compass/css3";
html {
  background: linear-gradient(-45deg, #dfbd9a, #aa7281, #102158);
        }
.osx-login {
  display:inline-block;
  position:absolute;
  top:50%;
  left:50%;
  width:250px;
  height:250px;
  padding:30px 35px;
  margin:-122px -127px;
  text-align:left;
  font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Geneva, Verdana, sans-serif;
  background:#efefef;
  @include background(linear-gradient(#f4f5f6, #e2e3e5));
  @include border-radius(5px);
  @include box-shadow(
    hsla(0,0,100%,0.5) 0 0 0 1px inset,
    hsla(0,0,0,0.35) 0 2px 5px 1px
  );
}

.osx-login .avatar {
  width:88px;
  height:88px;
  position:relative;
  margin:auto auto;
  background:#fff;
  @include border-radius(44px);
  @include background(linear-gradient(#fdfbfe, #c7c7c7));
  @include box-shadow(
    hsla(0,0,0,0.35) 0 0 0 1px inset,
    hsla(0,0,0,0.05) 0 1px 1px 1px,
    hsla(0,0,0,0.1) 0 0 4px 0
  );
  
  &:before {
    content:'';
    width:80px;
    height:80px;
    top:4px;
    left:4px;
    background:url("http://0.gravatar.com/avatar/bc13eedc2642303b1a2251a4da7f157e?s=200") center;
    position:absolute;
    @include background-size(cover);
    @include border-radius(40px);
    @include box-shadow(
      hsla(0,0,0,0.4) 0 0 0 2px inset
    );
  }
    
  &:after {
    content:'';
    width:38px;
    height:76px;
    position:absolute;
    left:12px;
    top:-7px;
    @include background(linear-gradient(hsla(0,0,100%,0.3), hsla(0,0,100%,0.1) 25%, hsla(0,0,100%,0)));
    @include border-left-radius(38px);
    @include transform(rotate(45deg));
  }
}


.osx-login .name {
  width:100%;
  text-align:center;
  font-size:0.82em;
  margin-top:13px;
}

.osx-login .password {
  width:100%;
  font-size:0.8em;
  margin-top:15px;
  padding:5px 2px;
  border:1px solid hsla(0,0,0,.3);
  @include border-radius(3px);
  @include box-shadow(
    hsla(0,0,0,0.15) 0 1px 2px 0 inset,
    hsla(0,0,100%,0.3) 0 1px 0 0
  );
  
  &:focus {
    outline:0;
    border:1px solid #77a7c0;
    @include box-shadow(
      hsla(206%,80%,40%,0.5) 0 0 3px 1px,
      hsla(206%,80%,40%,0.5) 0 0 2px 1px inset
    );
  }
    
  &::-webkit-input-placeholder {
    color:hsla(0,0,20%,0.5);
  }
  &:-moz-placeholder {
    color:hsla(0,0,20%,0.5);  
  }
  &::-moz-placeholder {
    color:hsla(0,0,20%,0.5);
  }
  &:-ms-input-placeholder {
    color:hsla(0,0,20%,0.5); 
  }
}

body {
  text-align:center;
 background:url("https://f.cl.ly/items/0m1s041Z2e0E1J2v2I3M/Galaxy_dark2.jpg") no-repeat center center fixed;
  @include background-size(cover);
}
    #button2{
	width:250px;
	height:35px;
	
	margin-top:10px;
	background:#498af2;
	font-family:verdana;
	font-size:14px;
	color:white;
	border-radius:5px 5px 5px 5px;
	border-width: 1px;
	border-style:solid;
	border-color: gray;
	cursor:pointer;
	outline:none;
	
}
    
    </style>
    </head>
<body>
    
    <?php
    session_start();
$get=$_SESSION['userd'];
    $r=mysqli_query($con,"select * from tbl_reg where id='$get'");
while($row=mysqli_fetch_array($r))
{
$dname=$row[1];
$image=$row[4];
}
    
    ?>
    <div class="osx-login">
  <center><img src="../login/myfolder/<?php echo $image;?>" width="155px" height="155px"></center>
  <form method="post">
  <input type="text " class="password" placeholder="Enter Your Password" name="username"/>
        <div>
				   <input type="submit" id="button2" value="Login" name="sub1"/>
            <br>
             
				</div>
      </form>
</div>
        
    
    <?php
    
    if(isset($_POST['sub1']))
    {
               
        $username=$_POST['username'];
        $result="select * from tbl_login where username='$username'";
$res=mysqli_query($con,$result);
 $num=mysqli_num_rows($res);
 $num1=mysqli_fetch_array($res);
 $id=$num1[0];
        
 $_SESSION['userd']=$num1[0];
 $status=$num1[3];
if($num==1 && $status=='user')
{
 $_SESSION['id']=$id;
header('location:userhome.php');
}else
    if($num==1 && $status=='admin')
    {
        $_SESSION['id']=$id;
        header('location:adminhome.php');
    }
     
    }
    
    ?>
    </body>
</html>