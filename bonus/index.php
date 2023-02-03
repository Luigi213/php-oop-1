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
    $arrayGenreMovie1 = [
        "action",
        "thriller",
    ];
    $movie1 = new movies('Batman',$arrayGenreMovie1);
    $arrayGenreMovie2 = [
        "action",
        "fantasy",
        "superpower"
    ];
    $movie2 = new movies('Spiderman',$arrayGenreMovie2);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/style.css">
        <title>Document</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div>
                        <?php 
                            echo 'Movie name: '.$movie1->getName().'<br>';
                            echo 'Genres: ';
                            for($i=0; $i<count($arrayGenreMovie1); $i++){
                                echo $movie1->getGenre()[$i].", ";
                            }
                        ?>
                    </div>
                </div>
                <div class="col-12 mt-4">
                    <div v-for>
                        <?php 
                            echo 'Movie name: '.$movie2->getName().'<br>';
                            echo 'Genres: ';
                            for($i=0; $i<count($arrayGenreMovie2); $i++){
                                echo $movie2->getGenre()[$i].", ";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body> 
</html>