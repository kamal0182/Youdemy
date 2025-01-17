<?php
namespace App\Services;

use App\Models\Categorie;
use App\Models\Cours;
use App\Models\Tag;
use App\Models\User;
use App\Repositories\GenaraleRepo;
use App\Services\RoleService as ServicesRoleService;
use App\Services\TagService as ServicesTagService;


// include_once "RoleService.php";
// require_once "../Models/User.php";
// include_once "./TagService.php";
// include_once "../Repositories/GenaralRepo.php";
class UserService{
    private User $user ;
    private Cours $cour ;
    private ServicesRoleService $roleservice ; 
    private ServicesTagService $tagservice ; 
    private CategorieService $categorieservice  ; 
    private CoursService $courservice ; 
    private array $tags ; 

    private GenaraleRepo $generalrepository ;
    public function __construct(){
        $this->user = new User ;
        $this->tagservice = new TagService();
        $this->roleservice = new RoleService ;
        $this->generalrepository = new GenaraleRepo ;
        $this->courservice = new CoursService ;
        $this->categorieservice = new CategorieService ;
    }
    public function getAllUsers($user){
       return  $this->generalrepository->getAllUsers($user);
        // var_dump($users);
        // foreach($users  as $user){
        //     $User = new User ;
        //    $roles = $this->roleservice->findById($user->id_role);
        //         $role = new Role();
        //         $role->constructor($roles->id , $roles->name , $roles->description);
        //         $User->Construct($user->id,$user->fisrtname,$user->lastname,$user->email,$user->password,$role);
        // }
    }
       
        public function createTage1($tage){
        
            $this->tagservice->create($tage);
        }
        public function create($course){
            
        }
        public function createCourse($cour){
            // var_dump($this->findUserByEmail($cour->getUser()->getEmail()));
            // echo ();
            $cour->setUser($this->findUserByEmail($cour->getUser()->getEmail()));
         $cour->setCategorie($this->categorieservice->findbyname($cour->getCategorie()->getName()));
    
          return   $this->courservice->create($cour);
        }
        public function createCategorie($categorie){
            $this->categorieservice->create($categorie);
        }
        public function findUserById($id){
           return  $this->generalrepository->foundById($id,"users");
        }
        public function findUserByName($name){
            return  $this->generalrepository->foundByName($name,"users");
        }
        public function findUserByEmail($email){
          
            
            return  $this->generalrepository->foundByEmail($email,"users");
        }
        public function createInscription(){
            $this->user = new User  ; 

        }
 
 
}

?>





























