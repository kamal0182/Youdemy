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
}
?> 