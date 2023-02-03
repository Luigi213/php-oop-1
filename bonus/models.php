<?php
    class movies {
        // instance
        public $name;
        public $genres;
        // construct
        function __construct($nameMovie, $genre){
            $this->name = $nameMovie;
            $this->genres = $genre;
        }
        // methods
        function getName(){
            return $this->name;
        }
        function getGenre(){
            return $this->genres;
        }
    }
?>