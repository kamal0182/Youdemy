<?php 
namespace App\Services;


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
                    
                    // var_dump($cours->getTags());   
                   
                    if(empty($cour->getCheckContenu)){ 
                    }
                }
            }
        }
        $cours = $this->generalrepository->create($cour);
        echo "<pre>";
        //    var_dump ($tag);
         ($cours) ;
            echo "</pre>";
        // echo $cour->getId();
        foreach($cour->getTags() as $tag){   
             $this->tagandcourrepo->create($cours,$this->tagservice->findByName($tag->getName())->getId());
           echo "<pre>";
        //    var_dump ($tag);
            echo "</pre>";
        }
        // var_dump($this->generalrepository->create($cour));
        // var_dump($cour->getTags());
                   
        }
    }

?>