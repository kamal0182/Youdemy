<?php 
namespace App\Services;

use App\Models\Categorie;
use App\Repositories\GenaraleRepo;

class CategorieService {
    private Categorie $categorie ; 
    private  GenaraleRepo $generalrepository ;

    public function __construct() {
        $this->generalrepository  = new GenaraleRepo ;
        $this->categorie = new Categorie ; 
    }
    public function create($category){
        if(!empty($category->getName())){
            if(!empty($category->getDescription())){
                $id  = $category->setId($this->generalrepository->create($category));
                return $id ; 
            }
        }
        else{
            return "Categorie name is not valid";
        }
    }
    public function  findbyname($name){
       return  $this->generalrepository->foundByName($name,"categories");
    }
    public function findById($id) {
        return  $this->generalrepository->foundById($id,"categories");
    }
    public function read(){
        return $this->generalrepository->getAll($this->categorie);
    }
    public function findOne($id){
       return $this->generalrepository->foundById($id,"categorie");
    }
    public function Modify(Categorie $categorie){
        $this->generalrepository->Modify($categorie);
    }

}
?> 