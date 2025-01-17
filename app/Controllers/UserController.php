<?php
// include_once "./../Models/Role.php";
// include_once "../app/Controllers/RoleController.php";
// ;
// include_once "./../Models/User.php";
// include_once "./../Services/UserService.php";
namespace App\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Services\UserService as ServicesUserService;
use Exception;

class UserController {
    private User $user ;
    private ServicesUserService $userservice ;
    // private GeneralDao $generalrepository ;
    public function __construct() {
        $this->userservice = new ServicesUserService();
    }
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


?>