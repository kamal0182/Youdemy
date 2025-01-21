<?php 
namespace App\Models;

class Inscription {
    
    private Cours $cour ;
    private User $Etudiants ;
    private $user_id ; 
    private $cour_id ;
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
        if($name == "ConstWithUser"){
            if(count($arguments) == 1 ){
                $this->Etudiants = $arguments[0];
                // $this-> = $arguments[1];
            }
        }
        if($name == "ConstWithCour"){
            if(count($arguments) == 1 ){
                $this->cour = $arguments[0];
                // $this-> = $arguments[1];
            }
        }
    }
    public function getUserId(){
        return $this->user_id;

    }
    public function getCourId(){
        return $this->cour_id;
        
    }
    public function SetUser( User $Etudiants){
        $this->Etudiants = $Etudiants ;
        
    }
    public function SetCour( Cours $cour){
        $this->cour = $cour ;
    }
   
    public function getUser(){
        return $this->Etudiants;
    }
    public function getCour(){
        return $this->cour ;
    }
    
}
?>