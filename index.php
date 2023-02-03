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
    $movie1 = new movies('Batman','action');
    $movie2 = new movies('Spiderman','fantasy');
    echo 'Movie name: '.$movie1->getName().'<br>';
    echo 'Genre: '.$movie1->getGenre().'<br><br>';
    echo 'Movie name: '.$movie2->getName().'<br>';
    echo 'Genre: '.$movie2->getGenre().'<br>';
?>

