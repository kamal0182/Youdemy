<?php 
namespace App\Controllers;


use App\Models\Categorie;
use App\Services\CategorieService;
use App\Services\UserService;

class CategorieController {
    private UserService $userservice ;
    private Categorie $categorie ; 
    private CategorieService $categorieservice;
     public function __construct() {
        $this->userservice = new UserService ;
        $this->categorie = new Categorie ;
        $this->categorieservice = new CategorieService ;
    }
    public function create($name , $description){
        $this->categorie->Construct($name,$description);
        $this->userservice->createCategorie($this->categorie);
    }
    public function read(){
        $this->categorieservice = new CategorieService ;
      return   $this->categorieservice->read();
    }
    public function findOne($id){
      return   $this->categorieservice->findOne($id);
    }
    public function modify($id , $name , $description ){
      $this->categorie->Construct($id , $name , $description);
      $this->userservice->ModifyCategory($this->categorie);
    }
}
// $cate = new CategorieController ; 
// var_dump($cate->read());

?>