<?php 
include "./../Models/Role.php";
// include "./../Models/User.php";
include "./../Services/RoleService.php";
class RoleController {
    private Role $role ;
    private RoleService $RoleService ;
    public function __construct() {
        $this->RoleService = new RoleService();
        $this->role = new Role ;
    }
    public function getAllUsers1(){
        try {
            $role = new Role ;
          return   $this->RoleService->getallRolles($role);
         }
         catch(Exception $e){
            echo $e->getMessage();
         }
    }
    public function create(){
        $rolename = "Admin";
        $roledescription = "this is Admin";
        $this->role->constructor($rolename,$roledescription);
       return  $this->RoleService->create($this->role);
        
    }
}
$con = new RoleController ;
// $lost = $con->create();
// var_dump($lost);


?>