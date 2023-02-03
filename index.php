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
                            echo 'Genre: '.$movie1->getGenre();
                        ?>
                    </div>
                </div>
                <div class="col-12 mt-4">
                    <div>
                        <?php 
                            echo 'Movie name: '.$movie2->getName().'<br>';
                            echo 'Genre: '.$movie2->getGenre();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body> 
</html>