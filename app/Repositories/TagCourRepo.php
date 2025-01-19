<?php 
namespace App\Repositories;

use App\Core\db\Database;
use App\DAOs\TagCourDao;
use PDO;

class TagCourRepo {
    private $db ; 
    private TagCourDao $tagcourdao;
    public function __construct() {
        $this->tagcourdao = new TagCourDao;
    }
    public function create($cour_id,$tag_id){
        $this->tagcourdao->setCourId($cour_id);
        $this->tagcourdao->seTagId($tag_id);
        $this->tagcourdao->create();
    }
    public function foundById($id){
     
        $this->db = new Database();
        $sql = "SELECT tag_id  FROM tagcours WHERE cour_id   = " .$id .";" ;
        // echo $sql ;
        $stmt =  $this->db->connection()->prepare($sql);
         $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
        
    }
}
?>