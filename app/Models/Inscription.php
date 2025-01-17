<?php 
namespace App\Models;

class Inscription {
    private int  $id ; 
    private Cours $cour ;
    private User $Etudiants ;
    public function __construct() 
    {
        // $this->cour = $cours ; 
        // $this->Etudiants = $Etudiants ;
    }
    public function __call($name, $arguments)
    {
        if($name == "Construct"){
            if($arguments == 2 ){
                $this->cour = $arguments[0];
                $this->Etudiants = $arguments[1];
            }
        }
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