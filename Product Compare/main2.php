
    
    <?php
    error_reporting(0);
    
    
    
    $web_page_data=file_get_contents("http://english.manoramaonline.com/");
    
    echo $web_page_data;
?>