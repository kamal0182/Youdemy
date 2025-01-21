<?php
// include_once "../../db/Database.php" ;
namespace App\DAOs;

use App\Core\db\Database as DbDatabase;
// use App\db\Database;
use App\Models\Categorie;
use App\Models\Cours;
use App\Models\Inscription;
use App\Models\Role;
use App\Models\Tag;
use App\Models\User;
use PDO;

abstract class GeneralDao {
    private $db ; 
    private  $classes = ["user"=>User::class,
                        "Cour"=>Cours::class ,
                        "categorie"=>Categorie::class ,
                        "Inscription"=>Inscription::class,
                        "tag"=>Tag::class,
                         "Role"=>Role::class];
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
        // $tolowercase = strtolower($this->tableName());
        $matchwithdatabsename = $this->tableName() ."s" ;
        return $matchwithdatabsename ;
    }
    public function read(){
        $this->db = new DbDatabase();
        $sql = "SELECT  * from {$this->matchwithclass()}";
        $stmt =  $this->db->connection()->prepare($sql);
        $stmt->execute();
     $result =  $stmt->fetchALL(PDO::FETCH_CLASS,$this->checkclass());
     return $result ;
    }
 
    public function create(){
        $this->db = (new DbDatabase())->connection();
        var_dump($this->db); 
        $keys = array_keys($this->columns());
        $joincloumn = implode(",",$keys);
        $arrValues = array_values($this->columns());
        $joincloumn1 = implode("','",$arrValues);
        $sql = "INSERT INTO {$this->matchwithclass()} ( {$joincloumn}) values ('{$joincloumn1}')" ;
        $stmt =  $this->db->prepare($sql);
        $stmt->execute();
        return  $this->db->lastInsertId();
    }
    public function delete(){

    }
    public function update($id){
        $this->db = (new DbDatabase())->connection();
        $updatearray = [];
        foreach($this->columns() as $key=>$value){
            $updatearray []  =  $key  ." = '" .$value ."'";
        }
        $matchwithquery = implode(" , ",$updatearray);
        $sql  = "UPDATE  {$this->matchwithclass()}   SET $matchwithquery WHERE id = " .$id .";"; 
        $stmt =  $this->db->prepare($sql);
         $stmt->execute();
         $result = $stmt->fetchObject($this->checkclass());
    }
}


?> 