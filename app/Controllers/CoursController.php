<?php 
namespace App\Controllers;
require_once dirname(__DIR__, 3) ."\\vendor\\autoload.php";

use App\DAOs\TagCourDao;
use App\Models\Categorie;
use App\Models\Cours;
use App\Models\Tag;
use App\Models\User;
use App\Repositories\TagCourRepo;
use App\Services\CategorieService;
use App\Services\CoursService;
use App\Services\UserService;
class CoursController {
    private CoursService $courservice ; 
    private Cours $cour ; 
    private UserService $userservice;
    private CategorieService $categorieservice ; 
    private $id ; 
    public function __construct() {
        $this->cour = new Cours ;
        $this->courservice = new CoursService ;
        $this->userservice = new UserService ;
        $this->categorieservice = new CategorieService ; 
    }
    public function create() {
        $title = "the last dance" ;
        $desciption = "about something" ;
        $contenu = "ascascascasc";
        $useremail = "younes@example.com";
        $categoriename = "action";
        $array = ["action", "Drama" , "philosophy","7adoui"];
        $tagarray = [];
        foreach($array as $tagname){
            $tage = new Tag ; 
            $tage->Construct($tagname);
            $tagarray [] = $tage;
         }
        $Categorie  = new Categorie ;
        $Categorie->Construct($categoriename);
        $logo = "photo.png";
        $user = new User ;
        $user->Construct($useremail);
        $this->cour->Construct($title,$Categorie,$desciption,$contenu,$user,$logo,$tagarray);
        return  $this->userservice->createCourse($this->cour);
        $user = $this->userservice->findUserByEmail($useremail);
        $category = $this->categorieservice->findbyname($categoriename);
    }
    public function  modify(){
    }
    public function read(){
       return  $this->courservice->getAllCourse();
        }
}
$com = new CoursController ;
// var_dump($com->read());

?>