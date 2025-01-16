<?php 
namespace App\Controllers;
require_once dirname(__DIR__, 3) ."\\vendor\\autoload.php";

use App\Models\Categorie;
use App\Services\CategorieService;
use App\Services\CoursService;
use App\Services\UserService;

class CoursController {
    private CoursService $courservice; 
    private UserService $userservice;
    private CategorieService $categorieservice ; 
    private $id ; 
    public function __construct() {
        $this-> courservice = new CoursService ;
        $this-> userservice = new UserService ;
        $this->categorieservice = new CategorieService ; 
    }
    public function create(){
        $title = "the last dance";
        $useremail = "younes@example.com";
        $categoriename = "action";
        $user = $this->userservice->findUserByEmail($useremail);
        $category = $this->categorieservice->findbyname($categoriename);
        echo ($user->getId());
        echo ($category->getId());
    
        
    }
    public function addCategorytocours(){

    }

}
$e = new  CoursController ;
$e->create();
?>