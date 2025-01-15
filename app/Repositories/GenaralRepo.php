<?php 
include_once "../../db/Database.php";
class GenaraleRepo{
    private $db ;
    public function getAllUsers($table){
        // var_dump($table->read());
      return $table->read() ;
    }
    public function create($class){
       
        // $class->columns();
      return $class->create() ;
    }
    
    public function foundById($id ,$table){
        $this->db = new Database();
        $sql = "SELECT * FROM {$table} WHERE id  = " .$id .";" ;
        // echo $sql ;
        $stmt =  $this->db->connection()->prepare($sql);
         $stmt->execute();
         $result = $stmt->fetch(PDO::FETCH_OBJ);
        return $result ;
            // return $result ;
        
        // else {
        //     return "Not found";
        // }

    }
    public function foundByName($name ,$table){
        $this->db = new Database();
        $sql = "SELECT * FROM {$table} WHERE name  = " .$name  .";" ;
    
        $stmt =  $this->db->connection()->prepare($sql);
         $stmt->execute();
         $result = $stmt->fetch(PDO::FETCH_OBJ);
        return $result ;
  
}


?>