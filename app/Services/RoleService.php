<?php
namespace App\Services;
use App\Models\Role;
use App\Repositories\GenaraleRepo;

class RoleService {
    private  GenaraleRepo $generalrepository ;
    private Role $role  ;
    public function __construct() {
        $this->generalrepository = new GenaraleRepo ;
        $this->role = new Role();
    }
    public function getallRolles(){
        
       return  $this->generalrepository->getAllUsers($this->role);
    }
    public function findById($id){
     $role=    $this->generalrepository->foundById($id,"roles") ;
     return $role ;
    }
    public function findByName($role_name){
        echo $role_name; 
        return  $this->generalrepository->foundByName($role_name, "roles");
    }
    public function create($role){
        if(!empty($role->getname())){
            if(!empty($role->getDescription())){
                
            $role->setId($this->generalrepository->create($role));
            return $role ;
            }
        }
        
    }
}
  
?>