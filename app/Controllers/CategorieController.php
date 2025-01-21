<?php 
namespace App\Controllers;
require_once dirname(__DIR__, 3) ."\\vendor\\autoload.php";


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
    public function create($name , $description ){
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
    public function modify($id = "1" , $name = "madrid" , $description="this is madrid" ){
      $this->categorie->Construct($id , $name , $description);
      $this->userservice->ModifyCategory($this->categorie);
      // echo "AScascasc";
    }
}
$cate = new CategorieController ; 
$cate->modify(1,"madrid","rca");
// var_dump();

?>