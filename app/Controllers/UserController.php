<?php
// include_once "./../Models/Role.php";
include_once "./../Models/User.php";
include_once "./../Services/UserService.php";

class UserController {
    private User $user ;
    private UserService $userservice ;
    // private GeneralDao $generalrepository ;
    public function __construct() {
        $this->userservice = new UserService();
    }
    // public function createUser(){
    //     $firstname = "";
    //     $lastname = "kamal"; 
    //     $email = "adminsssdsd@example.com";
    //     $password = "1234";
    //     $rolename = "Student";
    //     $role = new Role ; 
    //     $role->constructor($rolename);
    //     $user = new User;
    //     $user->Construct($firstname , $lastname , $email , $password );
    //      try {
    //         $this->userservice->create($user);
    //      }
    //      catch(Exception $e){
    //         echo $e->getMessage();
    //      }
    // }
    public function getAllUsers(){
        try {
            $user = new user ;
          return   $this->userservice->getAllUsers($user);
         }
         catch(Exception $e){
            echo $e->getMessage();
         }
    }
}
$con = new UserController ;
 $con->getAllUsers() ;

?>