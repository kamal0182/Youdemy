<?php 
namespace App\Services;

use App\Models\Categorie;
use App\Models\Cours;
use App\Repositories\GenaraleRepo;
use App\Repositories\TagCourRepo;

class CoursService {
    private Cours $cour ; 
    private  GenaraleRepo $generalrepository ;
    private TagService $tagservice;
    private TagCourRepo $tagandcourrepo ; 
    public function __construct() {
        $this->tagandcourrepo = new TagCourRepo;
        $this->tagservice = new TagService ;
        $this->generalrepository  = new GenaraleRepo ;
        $this->cour = new Cours ;
    }
    public function create($cour){
        if(!empty($cour->getTitle())){
            if(!empty($cour->getDescription())){
                if(!empty($cour->getContenu())){
                    if(empty($cour->getCheckContenu)){ 
                    }
                }
            }
        }
        $cours = $this->generalrepository->create($cour);
        // echo $cour->getId();
        foreach($cour->getTags() as $tag){  
             $this->tagandcourrepo->create($cours,$this->tagservice->findByName($tag->getName())->getId());
       }
        // var_dump($this->generalrepository->create($cour));
        // var_dump($cour->getTags());
        }
        public function getAllCourse(){
        
            // var_dump($this->generalrepository->getAll($this->cour));
            $courses  =  $this->generalrepository->getAll($this->cour);
            $arrayOfCours = []; 
            foreach($courses as $cour){
                $categorie = new Categorie ;
                $categorieservice= new CategorieService ;
                $userservice = new UserService ;
                $cour->setUser($userservice->findUserById($cour->getUserId()));
                $cour->setCategorie($categorieservice->findById($cour->getCategorieId()));
               $tags =  $this->tagandcourrepo->foundById($cour->getId());
               $arrayoftags = []; 
               foreach($tags as $tag ){
               $arrayoftags[] =   $this->tagservice->findById($tag->tag_id);
               }
               $cour->setTags($arrayoftags);
               $arrayOfCours[] =  $cour ;
        }
        return $arrayOfCours ; 
    }
}
?>