<?php

class Products {
    private $db;
    
    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function getAllProducts () {
        $stmt = $this->db->prepare("SELECT * FROM cvp_exercise");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    
}

?>