<?php
include_once "RoleService.php";
require_once "../Models/Role.php";
require_once "../Models/User.php";
include_once "../Repositories/GenaralRepo.php";
class UserService {
    private User $user ;
    private RoleService $roleservice ; 
    private GenaraleRepo $generalrepository ;
    public function __construct(){
        $this->user = new User ;
        $this->roleservice = new RoleService ;
        $this->generalrepository = new GenaraleRepo ;
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
        public function create(){
            
        }
        public function createCourse(){
            // $user->Construct("");
        }


 
}

?>





























