<?php
namespace App\Services;
ini_set("memory_limit", "7000M");
// memory_limit = "2048M" ;

use App\Models\Cours;
use App\Models\User;
use App\Repositories\GenaraleRepo;

class InscriptionService {
    private GenaraleRepo $generalepository ;
    private UserService $userservice ;
    public function __construct() {
        $this->generalepository = new GenaraleRepo ;
        $this->userservice = new UserService ;
    }
        public function findCourses($inscrip){
       $arrayofinscrip =   $this->generalepository->foundByIdALL($inscrip->getUser()->getId() ,"inscriptions");
    //    foreach($arrayofinscrip as $oneinsc){
    //     $oneinsc->setUser($this->userservice->findUserById($oneinsc->getUserId()));
    // //    var_dump($oneinsc->getUser());
    //    }
    }
}
