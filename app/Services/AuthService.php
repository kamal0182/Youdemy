<?php 
namespace App\Services;

use App\Models\User;
use App\Repositories\GenaraleRepo;

class AuthService {
    private RoleService $roleservice ;
    private  GenaraleRepo $generalrepository ;
    public function __construct() {
        $this->roleservice = new RoleService ;
        $this->generalrepository = new GenaraleRepo ;
    }
    public function create($user) :User{
       
        $user->setRole($this->roleservice->findByName($user->getRole()->getname()));
        
        return $this->generalrepository->create($user);
    }
    public function validation(){
        return true ; 
    }

}
?>