<!DOCTYPE html>
<html>
    
    <head>
    

    
<title>Product Comparison </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

.btn {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 50%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
   
    img{
        
        width:100%;
        
    }
    
    
    </style>  
        
        
        
        
    </head>
        
        
        <body>
<div class="w3-container w3-teal">
  <h1>Product Comparison Site</h1>
</div>  
    
    
    
    <div class="w3-container">
        
    <form class="w3-container" action="main.php">
    <p>      
    
    <input class="w3-input w3-border w3-sand" name="search" type="text" placeholder="Search"></p>
    
    <button class="w3-btn w3-brown">Search</button>
  </form>
    
    
        
        
    
    <?php
    error_reporting(0);
        
        
        if(isset($_GET['search']))
            
        {
            
         //Get web Data form Pric tree api
            $search=$_GET['search'];
            $search=strtolower($search);
            $search=str_replace(" ","+",$search);
    
    $web_page_data=file_get_contents("http://www.pricetree.com/search.aspx?q=".$search);
    //need only search data
    
    $item_list=explode('<div class="items-wrap">', $web_page_data);
            
         $i=1;   
            
            if(sizeof($item_list)<2)
            {
                
                echo "<b style='color:red;font-size:20px;'>No product Available Enter Product Name Ex:Xperia M2</b>";
                
                $i=5;
            }
       
            
            
            $count=4;
    echo "<br><br>";
    for($i;$i<5;$i++)
    {
        //echo $item_list[$i];
     
        
       $url_link1=explode('href="',$item_list[$i]); 
       $url_link2=explode('"',$url_link1[1]);
        //echo $url_link2[0]."<br>";
        
        //i want the title of the product that searched
        // so....
        
        //to explode the href link of the product 
        
       $image_link1=explode('data-original="',$item_list[$i]); 
       $image_link2=explode('"',$image_link1[1]);
       // echo $image_link2[0]."<br>";
        
        //to return the correct url after
        //to get the product id
        
        $title1=explode('title="',$item_list[$i]);
        $title2=explode('"',$title1[1]);
        
        //to check  the availability of the product
        $available1=explode('avail-stores">',$item_list[$i]);        
        $available=explode('</div>',$available1[1]);
        if(strcmp($available[0],"Not available")==0)
        
        {
            $count=$count-1;
            continue;
        }
        
        
        
        $item_title=$title2[0];
        if(strlen($item_title)<2)
            
        {
            
           continue; 
            
            
        }
        $item_link=$url_link2[0];
            
        $item_image_link=$image_link2[0];
        
        $item_id1=explode("-",$item_link);
        
        $item_id=end($item_id1);
        
echo "<div class='card'>
<p class='title'>".$item_title."</p><br>
  <img src='$item_image_link'>
  <h1></h1>
  

 <p><a class='btn'>Contact</a></p>
</div>";
    
        
        
        
        
        
        
        //here going to code to access the price list of product bu using pricetree api
        
$request = "http://www.pricetree.com/dev/api.ashx?pricetreeId=".$item_id."&apikey=7770AD31-382F-4D32-8C36-3743C0271699";
$response = file_get_contents($request);
$results = json_decode($response, TRUE);
    //print_r($results);
        
        // Table need to be open before for each statement
        
        echo "<table class='w3-table-all'>
    <thead>
      <tr class='w3-blue'>
        <th>Seller Name</th>
        <th>Price</th>
        <th>Buy Here</th>
      </tr>
    </thead>";
        
        
        foreach($results['data'] as $itemdata)
        {
            
            /*
            i want the following data about the product
      
                    [PriceTree_Id] => 8508
                    [Seller_Name] => Snapdeal
                    [Best_Price] => 14,999.00
                    [In_Stock] => Yes
                    [Product_Name] => Motorola MOTO XT316 Touch N Type- Black
                    [Product_Color] => 
                    [Uri] => http://www.snapdeal.com/product/motorola-moto-xt316-touch-n/161188645
            
            
            */
           $product_ID=$itemdata['PriceTree_Id']; 
             
        $seller=$itemdata['Seller_Name'];
            
            $price=$itemdata['Best_Price'];
            
            $stock=$itemdata['In_Stock'];
            
            $product_name=$itemdata['Product_Name'];
            
            $product_color=$itemdata['Product_Color'];
            
            $product_url=$itemdata['Uri'];   
            
            
            //echo $seller.",<b style='color:green'>".$price."</b>,".$product_url."<br>";
           
            
            
        
            
            
    echo "
        
        <tr>
      <td>".$seller."</td>
      <td>".$price."</td>
      <td><a href=".$product_url.">Buy</a></td>
    </tr>";
   
            
        
        }
       echo "</table>"; 
        
    }
            if($count==0)
            {
                echo "<b style='color:black; font-size:20px;'>No Product available</b>";
                
            }
       
            
            
            
            
            
        }
        else
        {
            
            echo "<b style='color:red;font-size:20px;'>Use This To See The Best Results</b>";
            
        }
    
    
    
 
    ?>
        
        </div>

    
    
    <div class="w3-container w3-teal">
  <p>Copyright <?php echo "&copy;" . date("Y"); ?> my business name. All rights reserved</p>
</div>
    
    
    
    
    
    </body>
</html>
    
    
    
    
