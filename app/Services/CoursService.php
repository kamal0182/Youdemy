<?php 
namespace App\Services;


use App\Models\Cours;
use App\Repositories\GenaraleRepo;

class CoursService {
    private Cours $cour ; 
    private  GenaraleRepo $generalrepository ;
    public function __construct() {
        $this->generalrepository  = new GenaraleRepo ;
        $this->cour = new Cours ;
    }
    public function create($cour){
        $this->generalrepository->create($cour);
    }
}
?>