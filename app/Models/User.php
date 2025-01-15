<?php 
include "../DAOs/GeneralDao.php" ;
class User extends GeneralDao {
    private $id ; 
    private $fisrtname ; 
    private $lastname ; 
    private $email ; 
    private $password ; 
    private string $photo ;
    private Role  $role ; 
    private Inscription $inscription ;
    private int $id_role ;
    private string $situation  ;
   public function __construct() {
    }
    public function __call($name, $arguments)
    {
        if($name == "Construct"){
            if(count($arguments) == 2 ){
                $this->email = $arguments[0];
                $this->password = $arguments[1];
            }
            if(count($arguments) == 4){
                $this->fisrtname = $arguments[0];   
               $this->lastname = $arguments[1];
                $this->email = $arguments[2];
                $this->password = $arguments[3];
            }
            if(count($arguments) == 3 ){
                $this->email = $arguments[0];
                $this->email = $arguments[1];
                $this->email = $arguments[2];
            }
            if(count($arguments) == 6 ){
                $this->id = $arguments[0];
                $this->fisrtname = $arguments[1];   
                $this->lastname = $arguments[2];
                 $this->email = $arguments[3];
                 $this->password = $arguments[4];
                 $this->role = $arguments[5] ;
            }
            if(count($arguments) == 7 ){
                $this->id = $arguments[0];
                $this->fisrtname = $arguments[1];   
                $this->lastname = $arguments[2];
                 $this->email = $arguments[3];
                 $this->password = $arguments[4];
                 $this->role = $arguments[5] ;
                 $this->situation = $arguments[6];
            }
        }
    }
    public function tableName() {
        return  __CLASS__;
    }
    public function columns(): array
    {
       return ["fisrtname"=>$this->fisrtname,"lastname"=>$this->lastname,"email"=>$this->email,"password"=>$this->password,"id_role"=>$this->role->getName()];    
    }
    public function SetId($id){
        $this->id = $id ;
    }
    public function SetFirstName($fname){
        $this->fisrtname = $fname ;
    }
    public function SetLasteName($lname){
        $this->lastname = $lname ;
    }
    public function SetEmail($email){
        $this->email = $email ;
    }
    public function SetPassword($password){
        $this->password = $password ;
    }
    public function SetRole(Role $role){
        $this->role = $role ;
    }
    public function getEmail(){
       return  $this->email ;
    }
    public function getFirstName(){
        return $this->fisrtname ;
    }
    public function getLastName(){
        return $this->lastname ;
    }
    public function getRole(){
        return $this->role ; 
    }
    public function getPassword(){
        return $this->password ;
    }
    public function getId(){
        return $this->id;
    }

    // public function inscriptions($inscription ){
    //     $this->inscriptions = $inscription ; 
    // }
}



?> 