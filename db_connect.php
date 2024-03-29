<?php
class Database {

//Private vairables ensure that these vairables can't be used by anything else
private $servername;
private $username;
private $password;
private $dbname;

public function connect() {

    //Have used PDO to connect to the MYSQL database

//DB Connection params
$this->servername = "localhost";
$this->username = "root";
$this->password = "";
$this->dbname = "cvp_exercise";

//A statement to try and catch if the database isn't connected and is passing through the correct vairables etc
try {

$dsn = "mysql:host=" . $this->servername . ";dbname=" . $this->dbname;
$pdo = new PDO($dsn, $this->username, $this->password);    
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//echo "Connected to Database";
return $pdo;

} catch (PDOException $e) {
    echo "Connection Failed: ".$e->getMessage();
}


}

}

?>