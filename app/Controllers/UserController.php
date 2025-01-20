<?php
// include_once "./../Models/Role.php";
// include_once "../app/Controllers/RoleController.php";
// ;
// include_once "./../Models/User.php";
// include_once "./../Services/UserService.php";
namespace App\Controllers;
require_once dirname(__DIR__, 3) ."\\vendor\\autoload.php";

use App\Models\Role;
use App\Models\User;
use App\Services\UserService as ServicesUserService;
use Exception;
class UserController {
    private User $user ;
    private ServicesUserService $userservice ;

    // private GeneralDao $generalrepository ;
    public function __construct() {
        $this->user = new User ; 
        $this->userservice = new ServicesUserService();
    }
    public function getAllUsers(){
       
          return   $this->userservice->getAllUsers($this->user);
    }
    public function createTag(){
        // $this->userservice->CreateTags($arraytags);
    }
}
// $tag = new UserController();
// // var_dump();
// foreach($tag->getAllUsers() as $use){
//    var_dump( $use->getRole());
// }


?>