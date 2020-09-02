<?php
include("../Database-connection/conn.php");
$uc=$_GET['id'];

mysqli_query($con,"delete from tbl_addnews where newsid='$uc'");    
   header("location:userhome.php");


?>