<?php
include("../Database-connection/conn.php");
$uc=$_GET['uc'];
$getid=$_GET['newsid'];
$passid=$_GET['passid'];
if($uc=='update')
{

mysqli_query($con,"update tbl_addnews set status='update' where newsid='$getid'");
    header("location:viewnews.php?pid=$passid");
    
}elseif($uc=='cancel')   
{
    
mysqli_query($con,"delete from tbl_addnews where newsid='$getid'");    
   header("location:viewnews.php?pid=$passid");
}

?>