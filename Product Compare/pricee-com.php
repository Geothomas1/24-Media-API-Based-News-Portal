<?php
$web_page_data=file_get_contents("http://www.mysmartprice.com/msp/search/search.php?search_type=full&typed_term=&s=asus%20vivobook#s=asus vivobook");
echo $web_page_data;
?>
