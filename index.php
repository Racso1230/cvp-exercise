<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  type="text/css"rel="stylesheet" href="static/static.css">
    <title>CVP Exercise</title>
</head>
<body>

<div class= "nav">
    <a href="https://cvp.com/"><img  class = "logo "data-pagespeed-no-transform="" data-pagespeed-no-defer="" alt="CVP Homepage" src="https://cvp.com/img/assets/cvp_logo_2021.svg"></a>
    <div class= "nav-items">
        <a class="active" href="https://cvp.com/department/cameras">Cameras</a>
    <a href="https://cvp.com/department/lenses">Lenses</a>
    <a href="https://cvp.com/department/accessories">Accessories</a>
    <a href="https://cvp.com/department/audio">Audio</a>
    <a href="https://cvp.com/department/monitoring">Monitoring</a>
    <a href="https://cvp.com/department/lighting">Lighting</a>
    <a href="https://cvp.com/department/support-motion">Support and Motion</a>
    <a href="https://cvp.com/department/studio">Studio</a>
    </div>
</div>

<h1>Our Products</h1>

<div class = 'product-container'>




<?php

//includes the files that connect to the database and that allows me to grab data from the cvp_exercise table
include 'db_connect.php';
include 'catalogue.php';

//calls the database connection class and calls the connect() function within the object
$dbObject = new Database();
$connect = $dbObject->connect();

/*
calls the products class from within catalogue.php but also passes the dbo object (linking the pdo object to the retrieval object) within the function
$products vairable is used to call the function that displays that fetches the data from a simple sql select query into an array (from the catalogue.php return statement)
*/
$productInstance = new Products($connect);
$products = $productInstance->getAllProducts();

foreach($products as $product) {
    $id = htmlspecialchars($product['productID']);
    $productName = htmlspecialchars($product['product_name']);
    $category = htmlspecialchars($product['category']);
    $price = htmlspecialchars($product['price']);
    $image = htmlspecialchars($product['image']);
    $link = htmlspecialchars($product['link']);
    $stockStatus = htmlspecialchars($product['stock_status']);

    echo "<div class='product'>";
    echo "<center> <img src='$image' alt = 'Image of the $productName'></center>";
    echo"<div class = 'product-desc'>";
    echo"<h3>$productName</h3>";
    echo"<p>$category</p>";
    echo"<p>£$price</p>";
    echo"<p>Stock: $stockStatus</p>";
    echo"<a href = '$link'>Click here to find out more!</a>";
    echo"</div>";
    echo"</div>";
    
    
}
?>
</div>

    
</body>
</html>

<?php

/*
<div class="product-container">
    <div class="product">
       <center> <img src="https://cdn.cvp.com/images/products/12-09-20231694528687burano-small.jpg" alt = "placeholder"></center>
        <div class = "product-desc">
            <h3>Product Name</h3>
            <p>Product Description</p>
            <p>Price</p>
            <p>Stock: </p>
            <a href = "https://cvp.com/product/sony-burano-8k-camera">Link</a>
        </div>
    </div>
</div>


/*
used a foreach statement to loop through each selected row from the data as the data is in an array data type
the htmlspecialchars function is used for good practice-helps prevent XSS attacks and is generally considered good practice
*/
/*
foreach($products as $product) {
    echo "Product ID: " . htmlspecialchars($product['productID']) . "<br>";
    echo "Product Name: " . htmlspecialchars($product['product_name']) . "<br>";
    echo "Category: " . htmlspecialchars($product['category']) . "<br>";
    echo "Price: " . htmlspecialchars($product['price']) . "<br>";
    echo "Image: " . htmlspecialchars($product['image']) . "<br>";
    echo "Link: " . htmlspecialchars($product['link']) . "<br>";
    echo "Status: " . htmlspecialchars($product['stock_status']) . "<br>";
    
}
*/
/*
a for each loop to assign vairables to each database record. 
also echoed out some results to see that they are correctly assined to the vairables
*/


  /*
  echo "ID: $id<br>";
  echo "Product Name $productName <br>";
  echo "Category $category <br>";
  echo "Price: $price<br>";
  echo "Image $image <br>";
  echo "link $link <br>";
  echo "Stock Status $stockStatus<br>";
 */


  //echo "This product name is:.$productName.<br>";
 
  


  
  





?>



