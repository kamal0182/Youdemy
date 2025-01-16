<?php
namespace App\Core\db;

use PDO;
use PDOException;

class Database {
    private $dbname  = "Youdemy"; 
    private $password = "kamal12345";
    private $username= "root";
    private $servername = "localhost";
    private $db ; 
    public function connection(){
        try{
            $this->db = new PDO("mysql:host={$this->servername};dbname={$this->dbname}",$this->username,$this->password); 
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
            return $this->db ;
        } catch(PDOException $e) {
            echo "Connection failed : " . $e->getMessage();
        }
    }
}