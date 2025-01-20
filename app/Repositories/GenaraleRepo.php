<?php 

namespace App\Repositories;

use App\Core\db\Database;
use App\Models\Categorie;
use App\Models\Cours;
use App\Models\Inscription;
use App\Models\Role;
use App\Models\Tag;
use App\Models\User;
use PDO;

class GenaraleRepo{
    private $db ;
    private  $classes = ["users"=>User::class,
    "Cour"=>Cours::class ,
    "categories"=>Categorie::class,
    "Inscription"=>Inscription::class,  
    "tags"=>Tag::class,
    "roles"=>Role::class];
    public function getAll($table){
      return $table->read() ;
    }
    public function create($class){
      
      return $class->create() ;
    }
    public function Modify($table){
      $table->Modify();
    }
     public function checkclass ($table){
      // var_dump($table);
        foreach($this->classes as $key=>$value){
            if($table == $key){
                return $value ; 
            }
        }
    }
    public function foundById($id ,$table){
     
        $this->db = new Database();
        $sql = "SELECT * FROM {$table} WHERE id  = " .$id .";" ;
        
        // echo $sql ;
        $stmt =  $this->db->connection()->prepare($sql);
         $stmt->execute();
         $result = $stmt->fetchObject($this->checkclass($table));
        //  echo "<pre>";
        //  var_dump($result);
        return $result ;
    }
    public function foundByName($name ,$table){
        $this->db = new Database();
        $sql = "SELECT * FROM {$table} WHERE name  = '" .$name  ."';" ;
        // echo $sql ;
        $stmt =  $this->db->connection()->prepare($sql);
         $stmt->execute();
        //  echo."ASDasd" ;
         $result = $stmt->fetchObject($this->checkclass($table));
        return $result ;
    }   
    public function foundByEmail($email,$table){
      $this->db = new Database();
      $sql = "SELECT *  FROM {$table} WHERE email  = '" .$email  ."';" ;
      $stmt =  $this->db->connection()->prepare($sql);
      // echo $sql; 
       $stmt->execute();
       $result = $stmt->fetchObject($this->checkclass($table));
      return $result ;
    }
    public function findEmailAndPassword($email ,$password) {
      $this->db = new Database();
      $sql = "SELECT *  FROM users WHERE email  = '" .$email  ."' AND password =  '" .$password ."';" ;
      
      $stmt =  $this->db->connection()->prepare($sql);
    
       $stmt->execute();
       return $stmt->fetchObject(User::class);
       
    }
}

?>