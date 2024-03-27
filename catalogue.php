<?php

class Products {
    private $db;
    //used a constructore as I want to make absolute sure a pdo object gets passed through
    public function __construct(PDO $db) {
        $this->db = $db;
    }
    //used to retrieve all products from the database cvp_exercise

    /*
    $stmt acts as a way to get all of the products from the cvp_exercise table by using a simple sql statement
    the execute() function just executes the vairable (doesn't need any params so that is useful)
    return the $stmt variable so I can use fetchAll() function which displays the data in an array
    */ 
    public function getAllProducts () {
        $stmt = $this->db->prepare("SELECT * FROM cvp_exercise");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    
}

?>