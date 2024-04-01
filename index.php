<?php 
require_once 'include/Actualite.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'include/header_index.php'?>
    <main>
        <div class="background">
            <div>
                <h2 id="accueil">Bienvenue sur votre site rempli d'actualités !</h2>
            </div>
        </div>
        <div>
            <h2 id="actus">Actualités</h2>
            <div class="actus-container">
                <?php
                    $resultat = Actualite::getFive();
                    $resultat2= Actualite::getAuteur();
                    for ($index = 0; $index < count($resultat); $index++){
                        $actualite = new Actualite($resultat[$index],$resultat2[$index]);
                        $actualite->afficher();
                    }
                    ?>
                <a href="pages/actualite_display.php" class='link-actu'>
                    <div class='actualite_ensavoirplus'>
                        <div class="centrer">
                            <h3>En savoir plus...</h3>
                        </div>
                    </div>
                </a>
            
            </div>
        </div>
    </main>
    <?php 
    include 'include/footer.php'
    ?>
</body>
</html>