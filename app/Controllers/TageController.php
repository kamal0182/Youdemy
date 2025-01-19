<?php
namespace App\Controllers;

require_once dirname(__DIR__, 3) ."\\vendor\\autoload.php";

use App\Models\Tag;
use App\Services\TagService;
use App\Services\UserService;

// include_once "../Services/UserService.php";/
// include_once "../Models/Tag.php";
class TageController{
    public UserService $userservice ; 
    private Tag $tage ; 
    private TagService $tagservice ;
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
       return  $this->tagservice->getallTags();
    }

}
$tage = new TageController();
$tage->getallTags();
?>