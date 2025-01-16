<?php 
namespace App\Models;

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
    private static string  $checkcontenu ; 
    public function __construct() {
    }
    public function __call ($name , $arguments){
        if($name == "Construct"){
            if(count($arguments)== 7){
                $this->title = $arguments[0];
                $this->categorie = $arguments[1];
                $this->description = $arguments[2];
                $this->contenu = $arguments[3];
                self::$checkcontenu = $arguments[3];
                $this->Enseignant = $arguments[4];
                $this->tags = $arguments[5];
                $this->logo = $arguments[6];
            }
        }
    }
    public function getCheckContenu(){
        return self::$checkcontenu ;
    }
    public function setId($id){
        $this->id = $id ; 
    }

} 
?>