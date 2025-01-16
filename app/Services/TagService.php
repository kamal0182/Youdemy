<?php
namespace App\Services;
use App\Models\Tag;
use App\Repositories\GenaraleRepo;

class TagService {
    private Tag $tag ; 
    private  GenaraleRepo $generalrepository ;
    public function __construct() {
        $this->generalrepository  = new GenaraleRepo ;
        $this->tag = new Tag ; 
    }
    public function create($tage){
        if(!empty($tage->getName())){
            if(!empty($tage->getDescription())){
                $id =   $tage->setId($this->generalrepository->create($tage));
                echo $id ; 
                return $id ; 
            }
        }
        else{
            echo "Ascascasc";
        }
    }
}
?>