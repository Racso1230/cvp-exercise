

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
    <h1>CVP Product Catalogue</h1>
</body>
</html>

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

/*
used a foreach statement to loop through each selected row from the data as the data is in an array data type
the htmlspecialchars function is used for good practice-helps prevent XSS attacks and is generally encouraged from what I understand
*/
foreach($products as $product) {
    echo "Product ID: " . htmlspecialchars($product['productID']) . "<br>";
    echo "Product Name: " . htmlspecialchars($product['product_name']) . "<br>";
    echo "Category: " . htmlspecialchars($product['category']) . "<br>";
    echo "Price: " . htmlspecialchars($product['price']) . "<br>";
    echo "Image: " . htmlspecialchars($product['image']) . "<br>";
    echo "Link: " . htmlspecialchars($product['link']) . "<br>";
    echo "Status: " . htmlspecialchars($product['stock_status']) . "<br>";
    
}


?>



