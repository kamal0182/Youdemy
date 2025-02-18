<?php
namespace App\Services;
ini_set("memory_limit", "4000M");

use App\Models\Categorie;
use App\Models\Cours;

use App\Models\User;
use App\Repositories\GenaraleRepo;
use App\Services\InscriptionService as ServicesInscriptionService;
use App\Services\RoleService as ServicesRoleService;


class UserService{
    private User $user ;
    private Cours $cour ;
    private ServicesRoleService $roleservice ; 
    private TagService $tagservice ; 
    private CategorieService $categorieservice  ; 
    private CoursService $courservice ; 
    // private array $tags ; 
    // private ServicesInscriptionService  $isncripservice ;
    private ServicesInscriptionService $inscripservice ;

    private GenaraleRepo $generalrepository ;
    public function __construct(){
        // $this->user = new User ;
        $this->tagservice = new TagService();
        $this->roleservice = new RoleService ;
        $this->generalrepository = new GenaraleRepo ;
        $this->courservice = new CoursService ;
        $this->categorieservice = new CategorieService ;
        // $this->inscripservice = new InscriptionService;
        // $this->isncripservice = new ServicesInscriptionService ; 
        
    }
    public function getAllUsers($users){
        $arrayusers = [] ;
        foreach($this->generalrepository->getAll($users) as $user ){
           $user->setRole($this->roleservice->findById($user->getIdRole()));
            $arrayusers [] = $user ;
           
        }
        return $arrayusers ;
  
      
        // var_dump($users);
        // foreach($users  as $user){
        //     $User = new User ;
        //    $roles = $this->roleservice->findById($user->id_role);
        //         $role = new Role();
        //         $role->constructor($roles->id , $roles->name , $roles->description);
        //         $User->Construct($user->id,$user->fisrtname,$user->lastname,$user->email,$user->password,$role);
        // }
    }
       
        public function createTage1($arrayofTags){
           
            // $this->tagservice->create($tage);
        }
        public function create($course){
            
        }
        public function createCourse($cour){
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
      public function   ModifyCategory(Categorie $categorie){
        $this->categorieservice->Modify($categorie) ;
      }
      public function getallInscriptionsCourses($inscrip){
       return   $this->inscripservice->findCourses($inscrip);
       
      }
        // public function CreateTags($arrayofTags){
        //     foreach($arrayofTags as $tag){
        //         $this->tagservice->create($tag);
        //     }
        // }
}
?>





























