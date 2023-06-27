<?php
include("tableaufilm.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet 7 Cinema</title>
</head>

<body>
    <header>
        <nav>
            <ul class='ulnavun'>
                <a href="index.php?filtre=genre"><li>Genre</li></a>
                <a href="index.php?filtre=realisateur"><li>Réalisateur</li></a>
            </ul>

            <?php
                 if (isset($_GET['filtre']) && ($_GET['filtre'])=='genre'){ 
                 $filtre = $_GET['filtre'];
                 $genresAffiches =[];
                     echo '<ul class=\'genre\'>';

                    foreach ($listfilm as $film => $value) {
                        $genre=explode(", ",$value['genre']);
                        foreach ($genre as $key) {
                           if (!in_array($key, $genresAffiches)) {
                            echo '<a href="index.php?filtre='. $filtre .'&genre='. $key .'"><li>'. $key .'</li></a>';
                            $genresAffiches[] = $key;
                        '</ul>';
                        }
                          
                        }
                    }
                }
                 
                 
                 if (isset($_GET['filtre']) && ($_GET['filtre'])=='realisateur') {
                     $filtre = $_GET['filtre'];
                     $realAffiches=[];
                        echo '<ul class=\'realisateur\'>';

                    foreach ($listfilm as $film => $value) {
                        $realisateur=explode(", ",$value['realisateur']);
                        foreach ($realisateur as $keyreal) {
                            if (!in_array($keyreal, $realAffiches)) {
                                echo
                                    '<a href="index.php?filtre='. $filtre .'&realisateur='. $keyreal .'"><li>'. $keyreal .'</li></a>';
                                    '</ul>';
                            }
                        }
                        
                    }
                 }
                
            ?>
        </nav>
    </header>
<section class='cardsection'>
    <?php
    
    
    if (isset($_GET['genre'])) {
        
       
        foreach ($listfilm as $film => $value) {
            
            if ($value['duree'] !== 'inconnu') {
                $value['duree'] = $value['duree'] / 60;}
                
                if ($_GET['genre']==$value['genre']) {
                    
                    echo     '<div class=\'card\'>
                    <p class=\'title\'>Film: '. $value['name'] .'</p>
                    <div class=\'img_card\'><img src="'. $value['img'] .'" alt="#"></div>
                    <p class=\'date\'>Date de sortie: '. $value['date'] .'</p>
                    <p class=\'realisateur\'>Réalisateur: '. $value['realisateur'] .'</p>
                    <p class=\'duree\'>Durée: '. $value['duree'] .'</p>
                    <p class=\'genre\'>Genre: '. $value['genre'] .'</p>
                    <p class=\'synopsis\'>Synopsis: '. $value['synopsis'] .'</p>
                    <p class=\'bandeannonce\'>Bande-annonce: '. $value['bandeannonce'] .'</p>
                    </div>';
                    
                }    
            }
            
        }   
        else {
            foreach ($listfilm as $film => $value) {
                echo     '<div class=\'card\'>
                    <p class=\'title\'>Film: '. $value['name'] .'</p>
                    <div class=\'img_card\'><img src="'. $value['img'] .'" alt="#"></div>
                    <p class=\'date\'>Date de sortie: '. $value['date'] .'</p>
                    <p class=\'realisateur\'>Réalisateur: '. $value['realisateur'] .'</p>
                    <p class=\'duree\'>Durée: '. $value['duree'] .'</p>
                    <p class=\'genre\'>Genre: '. $value['genre'] .'</p>
                    <p class=\'synopsis\'>Synopsis: '. $value['synopsis'] .'</p>
                    <p class=\'bandeannonce\'>Bande-annonce: '. $value['bandeannonce'] .'</p>
                    </div>';
            }

        }
            
    ?>

</section>    
</body>
</html>
