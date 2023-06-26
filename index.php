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
                 if (isset($_GET['filtre']) & ($_GET['filtre'])=='genre') {
                    $filtre = $_GET['filtre'];
                        echo '<ul class=\'genre\'>
                        <a href="index.php?filtre='. $filtre .'&genre=Action"><li>Action</li></a>
                        <a href="index.php?filtre='. $filtre .'&genre=Animation"><li>Animation</li></a>
                        <a href="index.php?filtre='. $filtre .'&genre=Aventure"><li>Aventure</li></a>
                        <a href="index.php?filtre='. $filtre .'&genre=Comédie"><li>Comédie</li></a>
                        <a href="index.php?filtre='. $filtre .'&genre=Drame"><li>Drame</li></a>
                        <a href="index.php?filtre='. $filtre .'&genre=Famille"><li>Famille</li></a>
                        <a href="index.php?filtre='. $filtre .'&genre=Fantastique"><li>Fantastique</li></a>
                        <a href="index.php?filtre='. $filtre .'&genre=Historique"><li>Historique</li></a>
                        <a href="index.php?filtre='. $filtre .'&genre=Thriller"><li>Thriller</li></a>
                        <a href="index.php?filtre='. $filtre .'&genre=sciences-fiction"><li>Sciences-Fiction</li></a>
                        </ul>';
                 }

                 if (isset($_GET['filtre']) & ($_GET['filtre'])=='realisateur') {
                    $filtre = $_GET['filtre'];
                    foreach ($listfilm as $film => $value) {
                        echo '<ul class=\'realisateur\'>
                        <a href="index.php?filtre='. $filtre .'&realisateur='. $value['realisateur'] .'"><li>'. $value['realisateur'] .'</li></a>';
                        '</ul>';
                    }
                 }

            ?>
        </nav>
    </header>
<section class='cardsection'>
    <?php

    foreach ($listfilm as $film => $value) {
        
        if ($value['duree'] !== 'inconnu') {
            $value['duree'] = $value['duree'] / 60;}

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
    
    ?>

</section>    
</body>
</html>
Denis Imbert, Aaron Horvath, Michael Jelenic, Joaquim Dos Santos, Kemp Powers, Justin Thompsom, David F. Sandberg, Legrand Bemba-Debert, Jennifer Devoldère, Guillaume Maidatchevsky, 
François Ozon, James Gunn, Martin Bourboulon, Mette Rank-Tange, Benjamin Quabeck, Cécilia Rouaud, Dany Boon, Oleh Malamuzh, Oleksandra Ruban, Rob Marshall, Victoria Bedos, Lisa Azuelos,
Franck Cimière, Jeanne Herry, Chad Stahelski, Jonathan Barré, Jonathan Goldstein (XII), John Francis Daley, François Pirot, Romain Quirot, Ludovic Bernard, Scott Beck, Bryan Woods