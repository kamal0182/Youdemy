<?php 
namespace App\Repositories;

use App\DAOs\TagCourDao;

class TagCourRepo {
    private TagCourDao $tagcourdao;
    public function __construct() {
        $this->tagcourdao = new TagCourDao;
    }
    public function create($cour_id,$tag_id){
        $this->tagcourdao->setCourId($cour_id);
        $this->tagcourdao->seTagId($tag_id);
        $this->tagcourdao->create();
    }
}
?>