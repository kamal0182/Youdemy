<?php

use App\Models\Cours;
use App\Models\User;
use App\Repositories\GenaraleRepo;

class InscriptionService {
    private GenaraleRepo $generalepository ;
    private Cours $cour ; 
    private User $etudiant ; 
    public function __construct($etudiant ,$cour)
    {
        $this->etudiant = $etudiant ;
        $this->cour = $cour ;
    }
    public function getEtudiant(){
        return $this->etudiant ;

    }
    
    public function getCour(){
        return $this->cour ;
    }
    public function setEtudiant(User $user){
        $this->etudiant = $user ;
    }
    public function  SetCour(Cours $cour){
        $this->cour = $cour ;
    }
}
?>