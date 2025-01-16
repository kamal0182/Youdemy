<?php
namespace App\Controllers;
require_once dirname(__DIR__, 3) ."\\vendor\\autoload.php";

use App\Models\Role;
use App\Models\User;
use App\Services\AuthService;
use Exception;

 class AuthController {
    private AuthService $authservice ;
    public function __construct() {
        $this->authservice = new AuthService() ; 
        
    } 
    public function createUser(){
        $firstname = "younes";
        $lastname = "kamal"; 
        $email = "younes@example.com";
        $password = "1234";
        $rolename = "Enseignant";
        $situation = "Active";
        $photo = "asc.png";
        $role = new Role ; 
        $role->constructor($rolename);
        $user = new User;
        $user->Construct($firstname , $lastname , $email , $password , $role ,$situation , $photo );
         try {
           return  $this->authservice->create($user);
         }
         catch(Exception $e){
            echo $e->getMessage();
         }
    }
 }
// $auth = new AuthController ; 
// echo "<pre>";
// var_dump($auth->createUser());
// echo "</pre>";
?>