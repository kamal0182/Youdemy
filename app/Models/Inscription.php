<?php 
namespace App\Models;

class Inscription {
    private $id ; 
    private Cours $cour ;
    private User $Etudiants ;
    public function __construct(Cours $cours , User $Etudiants, $id)
    {
        $this->cour = $cours ; 
        $this->Etudiants = $Etudiants ;
        $this->id = $id ; 
    }
    public function SetUser( User $Etudiants){
        $this->Etudiants = $Etudiants ;

    }
    public function SetCour( Cours $cour){
        $this->cour = $cour ;
    }
    public function SetId($id){
        $this->id = $id ;
    }
    public function getId(){
        return $this->id ;
    }
    public function getUser(){
        return $this->Etudiants;
    }
    public function getCour(){
        return $this->cour ;
    }
    
}
?>