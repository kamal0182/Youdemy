<?php 
namespace App\Controllers;

use App\Models\Cours;
use App\Models\Inscription;
use App\Models\User;
use App\Services\UserService;
use InscriptionService;

class InscriptionController{
    private InscriptionService $iscriptionservice ;
    private UserService $userservice ; 
    private Inscription  $inscription ; 
    public function __construct()
    {
        $this->userservice = new UserService ;
        $this->inscription = new Inscription() ; 
        $this->iscriptionservice = new InscriptionService ;
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

}

?>