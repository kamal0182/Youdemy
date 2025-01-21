<?php 
namespace App\DAOs;
class TagCourDao extends GeneralDao{
   
    private $courid ; 
    private $tagid ; 
  
    public function tableName()
    {
        return "tagcour";
    }
    public function columns () : array {
        return ["cour_id"=>$this->courid,"tag_id"=>$this->tagid];
    }
    public function setCourid($cour_id){
       $this->courid= $cour_id;
    }
    public function seTagId($tag_id){
        $this->tagid = $tag_id ;
    }
}

?>