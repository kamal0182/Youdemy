<?php 
namespace App\Services;
use App\Models\User;
use App\Repositories\GenaraleRepo;
use Exception;

class AuthService extends  ValidationService {
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
    public function  checkEmailAndPassword($email , $password) {
        if($this->validatioEmail($email)){
            $user = $this->generalrepository->findEmailAndPassword($email,$password);
            if(  $user   ){
                // echo $user->getId() ;
                // var_dump( $this->roleservice->($user->getName()));
               $user->SetRole($this->roleservice->findById($user->getId()));
               var_dump($user->getRole());
               return $user ;
            }
        }
        else {
            throw new Exception("Email is Not Valid!");
        }
    }


}
?>