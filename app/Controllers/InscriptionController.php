<?php 
namespace App\Controllers;
ini_set('memory_limit', '2048M');

require_once dirname(__DIR__, 3) ."\\vendor\\autoload.php";

use App\Models\Cours;
use App\Models\Inscription;
use App\Models\User;
use App\Services\InscriptionService as ServicesInscriptionService;
use App\Services\UserService;
use InscriptionService;

class InscriptionController{
    private ServicesInscriptionService $iscriptionservice ;
    private UserService $userservice ; 
    private Inscription  $inscription ; 
    public function __construct()
    {
        $this->iscriptionservice = new ServicesInscriptionService ;
        $this->userservice = new UserService ;
        $this->inscription = new Inscription() ; 
        // $this->iscriptionservice = new InscriptionService ;
    }
    public function create(){
        $iduser = 1 ; 
        $idcour = 8 ;
        $cour  = new  Cours ;
        $cour->Construct($idcour);
        $user = new User ; 
        $user->constructerWhitId($iduser);
        $this->inscription->Construct($cour , $user);
        $this->userservice->createInscription($this->inscription);
        }
        public function getallme($id = 1){
            $user = new User ; 
            $user->constructerWhitId($id);
            // var_dump($user);
            $instcrip = new Inscription ;
            $instcrip->ConstWithUser($user);
            var_dump($instcrip->getUser());
            $this->userservice->getallInscriptionsCourses($instcrip);
        }

}
$t = new InscriptionController ;
$t->getallme(1);

?>