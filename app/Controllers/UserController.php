<?php
// include_once "./../Models/Role.php";
// include_once "../app/Controllers/RoleController.php";
// ;
// include_once "./../Models/User.php";
// include_once "./../Services/UserService.php";
namespace App\Controllers;
ini_set('memory_limit', '3000M');
require_once dirname(__DIR__, 3) ."\\vendor\\autoload.php";

use App\Models\Cours;
use App\Models\Role;
use App\Models\User;
use App\Services\CoursService;
use App\Services\UserService as ServicesUserService;
use Exception;
class UserController {
    private User $user ;
    private ServicesUserService $userservice ;
    private CoursService $coursservice ; 

    // private GeneralDao $generalrepository ;
    public function __construct() {
        $this->coursservice = new CoursService ;
        $this->user = new User ; 
        $this->userservice = new ServicesUserService();
    }
    public function getAllUsers(){
       
          return   $this->userservice->getAllUsers($this->user);
    }
    public function createTag(){
        // $this->userservice->CreateTags($arraytags);
    }
    public function showMyCourses($id){
        $user = new user ; 
        $user->constructerWhitId($id);
        $course  = new Cours ;
        $course->createInstanceWithUser($user);
       return  $this->coursservice->findCoursByUser($course);
    }
}
// $tag = new UserController();
// // var_dump();
// foreach($tag->showMyCourses(1) as $use){
//    var_dump( $use);
// }


?>