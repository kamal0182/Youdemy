<?php
// include_once "../../db/Database.php" ;
namespace App\DAOs;

use App\Core\db\Database as DbDatabase;
// use App\db\Database;
use App\Models\Categorie;
use App\Models\Cours;
use App\Models\Inscription;
use App\Models\Tag;
use App\Models\User;

abstract class GeneralDao {
    private $db ; 
    private  $classes = ["User"=>User::class,
                        "Cours"=>Cours::class ,
                        "Categorie"=>Categorie::class,
                        "Inscription"=>Inscription::class,
                        "tags"=>Tag::class] ;
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
        $matchwithdatabsename = $tolowercase ."s" ;
        return $matchwithdatabsename ;
    }
    public function read(){
        $this->db = new DbDatabase();
        $sql = "SELECT  * from {$this->matchwithclass()}";
        $stmt =  $this->db->connection()->prepare($sql);
        $stmt->execute();
       return $stmt->fetchObject($this->checkclass());
    }
    public function create(){
        $this->db = (new DbDatabase())->connection();
        $keys = array_keys($this->columns());
        $joincloumn = implode(",",$keys);
        $arrValues = array_values($this->columns());
        $joincloumn1 = implode("','",$arrValues);
        $tablename = $this->tableName();
        $sql = "INSERT INTO {$this->matchwithclass()} ( {$joincloumn}) values ('{$joincloumn1}')" ;
        $stmt =  $this->db->prepare($sql);
        $stmt->execute();
        return  $this->db->lastInsertId();
   
    }
    public function delete(){

    }
    public function update(){

    }
     
}


?> 