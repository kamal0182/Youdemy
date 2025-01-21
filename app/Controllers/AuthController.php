<?php
namespace App\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Services\AuthService;
use Exception;

 class AuthController {
    private AuthService $authservice ;
    public function __construct() {
        $this->authservice = new AuthService() ; 
    } 
    public function createUser($firstname , $lastname , $email , $password ,$photo , $rolename ){
      if(isset($_REQUEST['submit'])){
         $firstname = $_REQUEST['firstname'];
         echo $firstname ;
      }
        $lastname = "kamal"; 
        $email = "amir@example.com";
        $password = "1234";
        $rolename = "Enseignant";
        $station = "Active" ;
        if($rolename=="Enseignant"){
           $station = "Pending";
        }
        $photo = "asc.png";
        $role = new Role ; 
        $role->constructor($rolename);
        $user = new User;
        $user->Construct($firstname , $lastname , $email , $password , $role ,$station , $photo );
         // try {
         //   return  $this->authservice->create($user);
         // }
         // catch(Exception $e){
         //    echo $e->getMessage();
         // }
    }
    public function Login($email , $password ){
      try {
           $user =  $this->authservice->checkEmailAndPassword($email , $password) ;
           $_SESSION['user']= $user ;
         
      }
      catch(Exception $e){
         return $e->getMessage();
      }
    }
 }


?>