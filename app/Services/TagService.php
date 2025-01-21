<?php
namespace App\Services;
ini_set("memory_limit", "7000M");

use App\Models\Tag;
use App\Repositories\GenaraleRepo;
class TagService {
    private Tag $tag ; 
    private  GenaraleRepo $generalrepository ;
    public function __construct(){
        $this->generalrepository = new GenaraleRepo ;
        $this->tag = new Tag ;
    }
    public function create($tage){
        if(!empty($tage->getName())){
            if(!empty($tage->getDescription())){
                $id =   $tage->setId($this->generalrepository->create($tage));
                return $id ;
            }
        }
    }
    public function findByName($name){
        // var_dump( $this->generalrepository->foundByName($name,"tags"));
        return  $this->generalrepository->foundByName($name,"tags");
    }
    public function findById($id){
        return  $this->generalrepository->foundById($id,"tags");
    }
   public function  getAllTags(){
   return  $this->generalrepository->getAll($this->tag);
    }
}
?>