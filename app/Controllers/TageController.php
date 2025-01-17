<?php
namespace App\Controllers;



use App\Models\Tag;
use App\Services\UserService;

// include_once "../Services/UserService.php";/
// include_once "../Models/Tag.php";
class TageController{
    public UserService $userservice ; 
    private Tag $tage ; 
    public function __construct(){
        $this->tage = new Tag();
        $this->userservice = new UserService;
    }
    public function createTage(){
        $tagname = "7adoui";
        $tagdescription = "this is action ";
        $this->tage->Construct($tagname,$tagdescription);
       return $this->userservice->createTage1($this->tage);
    }
    public function getallTags(){
        $this->userservice->createTage1($this->tage);
    }
}
// $tage = new TageController();
// $tage->createTage();
?>