<?php
class Movie {
    public $title;
    public $director;
    public $genre = '';

    public $actors = [];
    public $language = '';
    public $year;
    public $duration = 0;
    public $description = ''; 

    function __construct($_title, $_director = ''){
        $this->title = $_title;
        $this->director = $_director;
    }

    public function addActor($_actor){
        if( !in_array($_actor, $this->actors) ){
            $this->actors[] = $_actor;
        }
    }
}

?>