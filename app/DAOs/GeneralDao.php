<?php
include  "../../db/Database.php" ;
abstract class GeneralDao {
    private $db ; 
    private  $classes = ["User"=>User::class,
                        "Cours"=>Cours::class ,
                        "Categorie"=>Categorie::class,
                        "Inscription"=>Inscription::class] ;
    abstract public function tableName() ;
    abstract public function columns() : array ; 
    public function checkclass (){
        foreach($this->classes as $key=>$value){
            if($this->tableName() == $key){
                return $value ; 
            }
        }
    }
    public function matchwithclass(){
        $tolowercase = strtolower($this->tableName());
        $matchwithdatabsename = $tolowercase."s" ;
        return $matchwithdatabsename ;
    }
    public function read(){   
        
      
        $this->db = new Database();
        $sql = "SELECT  * from {$this->matchwithclass()}";
        $stmt =  $this->db->connection()->prepare($sql);
        $stmt->execute();
       return $stmt->fetchObject($this->checkclass());
        
    }
    public function create(){
        $this->db = (new Database())->connection();
        $keys = array_keys($this->columns());
        $joincloumn = implode(",",$keys);
        $arrValues = array_values($this->columns());
        $joincloumn1 = implode("','",$arrValues);
        $tablename = $this->tableName();
        $sql = "INSERT INTO {$this->matchwithclass()} ( {$joincloumn}) values ('{$joincloumn1}')" ;
        $stmt =  $this->db->prepare($sql);
        $stmt->execute();
        $id   =  $this->db->lastInsertId();
        // echo $id ;
        return $id ;
    }
    public function delete(){

    }
    public function update(){

    }
     
}


?> 