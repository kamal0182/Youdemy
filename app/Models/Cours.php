<?php 
class Cours {
    private int $id ;
    private string  $title ;
    private User $Enseignant ; 
    private string  $description ;
    private string $contenu ;
    private Categorie $categorie ;
    private array $tags ;
    private string $logo ;
    private array $inscriptions ;
    public function __construct() {
       
    }
    public function __call ($name , $arguments){
        if($name == "Construct"){
            if(count($arguments)== 7 ){
                $this->title = $arguments[0];
                $this->Enseignant = $arguments[1];
                $this->description = $arguments[2];
                $this->contenu = $arguments[3];
                $this->categorie = $arguments[4];
                $this->tags = $arguments[5];
                $this->logo = $arguments[6];
            }
        }
    }
} 
?>