<html>
<head>
    <title>Live</title>
    <style>
    .back{
  background:url(../images/111.png);
            
  
  font-family: 'Open Sans', sans-serif; 
  margin:20px auto;
            
}
    
    </style>
    </head>
<body class="back">
     <center>
         <br><br><br><br><br><br>
    <?php
    $geturl=$_GET['url'];
    
   echo "<embed width='415' height='300'  src='https://www.youtube.com/v/$geturl?rel=0'>";
    ?>
       </center>
    </body>
</html>