<?php
    include __DIR__. '/models.php';
    include __DIR__. '/db.php';
    
    $movie1 = new movies('Batman',$arrayGenreMovie1);
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
            <div class="row mt-4 justify-content-center">
                <div class="col-12 text-center">
                    <h1 class="text-danger">MOVIES</h1>
                </div>
                <div class="col-sm-6 d-flex justify-content-center">
                    <div class="card text-center" style="width: 18rem;">
                        <img src="https://cdn1.epicgames.com/undefined/offer/batman-arkham-knight_promo-2048x1152-ed2be22b3f24f446534b90b122ed560d.jpg" class="card-img-top" alt="batman">
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $movie1->getName(); ?></h3>
                            <p class="card-text">
                                <?php 
                                    echo '<p class="text-danger fw-semibold fs-4">Genres:</p>';
                                    for($i=0; $i<count($arrayGenreMovie1); $i++){
                                        echo $movie1->getGenre()[$i].", ";
                                    }
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 d-flex justify-content-center">
                    <div class="card text-center" style="width: 18rem;">
                        <img src="https://blog.it.playstation.com/tachyon/sites/12/2022/06/c7ad90b8e7459ba44f6974a429783aee42275f1b.jpg" class="card-img-top" alt="batman">
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $movie2->getName(); ?></h3>
                            <p class="card-text">
                                <?php 
                                    echo '<p class="text-danger fw-semibold fs-4">Genres:</p>';
                                    for($i=0; $i<count($arrayGenreMovie2); $i++){
                                        echo $movie2->getGenre()[$i].", ";
                                    }
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body> 
</html>