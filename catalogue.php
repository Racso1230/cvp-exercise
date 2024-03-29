<?php

class Products {
    private $db;
    //used a constructor as I want to make absolute sure a pdo object gets passed through
    public function __construct(PDO $db) {
        $this->db = $db;
    }

    /*
    $stmt acts as a way to get all of the products from the cvp_exercise table by using a simple sql statement
    the execute() function just executes the vairable (doesn't need any params so that is useful)
    return the $stmt variable so I can use fetchAll() function which displays the data in an array
    */ 
    public function getAllProducts () {
        //simple sql statement to get all of the rows inserted into the database earlier.
        $stmt = $this->db->prepare("SELECT * FROM cvp_exercise");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function displayAllProducts () {
        //assigned a $products vairable so that it exists and have called an instance of getAllProducts so that it knows to select all of the data from the cvp_exercise table and so the foreach loop can actually loop through data
        $products = $this->getAllProducts();

        //used a foreach loop to loop through the array (created by the getAllProducts function in the Products class) and have assigned each database vairable to a result
        //used the htmlspecialchars function to make the vairables less prone to xss attacks
        foreach($products as $product) {
            $id = htmlspecialchars($product['productID']);
            $productName = htmlspecialchars($product['product_name']);
            $category = htmlspecialchars($product['category']);
            $price = htmlspecialchars($product['price']);
            $image = htmlspecialchars($product['image']);
            $link = htmlspecialchars($product['link']);
            $stockStatus = htmlspecialchars($product['stock_status']);
        
            echo "<div class='product'>";
            echo "<img src='$image' alt = 'Image of the $productName'>";
            echo"<div class = 'product-desc'>";
            echo"<h3>$productName</h3>";
            echo"<p>$category</p>";
            echo"<p>£$price</p>";
            echo"<p>Stock: $stockStatus</p>";
            echo"<a href = '$link'>Click here to find out more!</a>";
            echo"</div>";
            echo"</div>";
        }
    }

    
}

?>