<?php 
namespace App\Controllers;
require_once dirname(__DIR__, 3) ."\\vendor\\autoload.php";

use App\Models\Role;
use App\Services\RoleService as ServicesRoleService;
use Exception;


// include "./../Models/Role.php";
// // include "./../Models/User.php";
// include "./../Services/RoleService.php";
class RoleController{
    private Role $role ;
    private ServicesRoleService $RoleService ;
    public function __construct() {
        $this->RoleService = new ServicesRoleService();
        $this->role = new Role ;
    }
    public function getAllUsers1(){
        try {
          return   $this->RoleService->getallRolles($this->role);
         }
         catch(Exception $e){
            echo $e->getMessage();
         }
    }
    public function create(){
        $rolename = "Etudiant";
        $roledescription = "this is Etudiant";
        $this->role->constructor($rolename,$roledescription);
        var_dump($this->role);
        
       return  $this->RoleService->create($this->role);
    }
}
// $co = new RoleController ; 
// $co->create();


?>