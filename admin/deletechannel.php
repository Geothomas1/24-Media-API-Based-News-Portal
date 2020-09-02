<?php
include("../Database-connection/conn.php");
$getid=$_GET['id'];
mysqli_query($con,"delete from tbl_channel where cid='$getid'");    
   header("location:viewchannellist.php");
?>