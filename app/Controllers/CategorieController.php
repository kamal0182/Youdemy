<?php 
namespace App\Controllers;

use App\Models\Categorie;
use App\Services\UserService;

class CategorieController {
    private UserService $userservice ;
    private Categorie $categorie ; 
     public function __construct() {
        $this->userservice = new UserService ;
        $this->categorie = new Categorie ;
    }
    public function create(){
        $name = "action";
        $description = "this is action";
        $this->categorie->Construct($name,$description);
        $this->userservice->createCategorie($this->categorie);
    }
}
$c = new CategorieController; 
$c->create();
?>