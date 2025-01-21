<?php 
namespace App\Models;

use App\DAOs\GeneralDao;

class Cours extends GeneralDao{
    private int $id ;
    private string  $title ;
    private User $Enseignant ; 
    private string  $description ;
    private string $contenu ;
    private Categorie $categorie ;
    private array $tags ;
    private string $logo ;
    private int $categorie_id ; 
    private int $user_id ;
    private array $inscriptions ;
    private static string  $checkcontenu ;
    public function __construct() {}
    public function __call ($name , $arguments){
        if($name == "Construct"){
            if(count($arguments) == 1 ){
                $this->id =  $arguments[0] ;
            }
            if(count($arguments)== 7){
                $this->title = $arguments[0];
                $this->categorie = $arguments[1];
                $this->description = $arguments[2];
                $this->contenu = $arguments[3];
                // self::$checkcontenu = $arguments[3];
                $this->Enseignant = $arguments[4];
                $this->logo = $arguments[5];
                $this->tags = $arguments[6];
            }
        }
        if($name == "createInstanceWithUser"){
            if(count($arguments) == 1 ){
                $this->Enseignant = $arguments[0];
        
    }
}
    }
    public function tableName():string
    {
        return"Cour";
    }
    public function columns():array{
        return ["title"=>$this->title,"description"=>$this->description,"contenu"=>$this->contenu,
        "logo"=>$this->logo,"categorie_id"=>$this->categorie->getId(),"user_id"=>$this->Enseignant->getId()];
    }

    public function getCheckContenu(){
        return self::$checkcontenu ;
    }
    public function getCategorieId(){
        return $this->categorie_id ; 
    }
    public function setTags(array $tags){
        $this->tags = $tags;
    }
    public function getUserId(){
        return $this->user_id;
    }
    public function getId(){
        return $this->id ; 
    }
    public function getTittle(){
        return $this->title ;
    }
    public function getDescrition(){
        return $this->description ; 
    }
    public function getContenu(){
        return $this->contenu ; 
    }
    public function getLogo(){
        return $this->logo ;
    }
    public function setId($id){
        $this->id = $id ; 
    }
    public function getUser(){
        return $this->Enseignant;
    }
    public function setUser(User $Enseignant){
        $this->Enseignant = $Enseignant ;
    }
    public function getCategorie(){
        return $this->categorie ; 

    }
    public function setCategorie($categorie){
         $this->categorie = $categorie ; 
    }
    // public function getId(){
    //     return $this->id ; 
    // }
    public function getTags(){
        return $this->tags ;
    }

} 
?>