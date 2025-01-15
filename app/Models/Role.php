<?php 
include_once "../DAOs/GeneralDao.php" ;
class Role extends GeneralDao{
    private int  $id ; 
    private string $name ;
    private string $description ; 
    public function __construct(){}
    public   function __call($name, $arguments){
        if($name == "constructor"){
            // if(count($argu+ments)==5){
            //     $this->fisrtname = $arguments[0];
            //     $this-> = $arguments[0];
            //     $this->fisrtname = $arguments[0];
            //     $this->fisrtname = $arguments[0];
            //     $this->fisrtname = $arguments[0];
            // }
            // if(count($arguments)==1){
            //     $instnace->name = $arguments[0];
            // }
            if(count($arguments)==3){
                $this->id = $arguments[0];
                $this->name = $arguments[1];
                $this->description = $arguments[2] ; 
            }
            if(count($arguments)==2){
                
                $this->name = $arguments[0];
                $this->description = $arguments[1] ; 
            }
        }
    }
    public function tableName(): string {
        return __CLASS__;
    }
    public function columns(): array
    {
        return ["name"=>$this->name,"description"=>$this->description]; 
    }
    public  function getname(){
        return $this->name ; 
    }
    public function getId(){
        return $this->id  ;
    }
    public function getDescription(){
        return $this->description  ;
    }
    public function setId($id){
        $this->id = $id ; 
    }
    public function setName($name){
        $this->name = $name ; 
    }
    public function setDescription($description){
        $this->description = $description ; 
    }

    
}


?>