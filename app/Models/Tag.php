<?php
namespace App\Models;

use App\DAOs\GeneralDao;

class Tag extends GeneralDao{
    private int $id ;
    private string $name ;
    private string $description ;
    public function __construct() {
    }
    public function __call($name, $arguments)
    {
        if($name == "Construct"){
            if(count($arguments) == 1 ){
                $this->id = $arguments[0];
            }
            if(count($arguments) == 2 ){
                $this->name = $arguments[0];
                $this->description = $arguments[1];
            }
            if(count($arguments) == 3){
                $this->id = $arguments[0]; 
                $this->name = $arguments[1];
                $this->description = $arguments[2];
            }
        }
    }
    public function tablename(){
        return "tags" ;
    }
    public function columns(): array{
        return ["name"=>$this->name, "description"=>$this->description];
    }
    public function getId(){
        return $this->id ;
    }
    public function getName(){
        return $this->name ;
    }
    public function getDescription(){
        return $this->description ;
    }
    public function setId($id){
         $this->id = $id  ;
    }
    public function setName($name){
         $this->name =  $name ;
    }
    public function setDescription($description){
         $this->description =  $description ;
    }
}
?>