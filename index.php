<?php 
    require_once "include/actualite.php";
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
    <?php include 'include/header.php'?>
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
                    $resultat = Actualite::getAll();
                    $resultat2= Actualite::getAuteur();
                    for ($index = 0; $index < 5; $index++){
                        $actualite = new Actualite($resultat[$index],$resultat2[$index]);
                ?>
                <a href='article.php?id=<?= $actualite->getID()?>' class='link-actu'>
                    <div class='actualite'>
                        <div class='img-actu-container'>
                            <img src='<?= $actualite->getUrlImage()?>' alt='Image Actu' title='Image Actu' class='img-actu'/>
                        </div>
                        <div class='content-actu'>
                            <p class='tags'>Tags : <?= $actualite->getTag()?></p>
                            <p class='date_modif'>Dernière modification : <?= $actualite->getDateModif()?></p>
                            <h3 class='titre_actu'><?= $actualite->getTitre()?></h3>
                            <p class='texte-content'><?= $actualite->apercu()?></p>
                            <p class='auteurs'>Auteur : <?= $actualite->getNomAuteur()?> <?= $actualite->getPrenomAuteur()?></p>
                            <p class='date_publi'>Date de publication : <?= $actualite->getDatePubli()?></p>
                            <p class='sources'>Sources : <?= $actualite->getSources()?></p>
                        </div>
                    </div>
                </a>
                <?php }?>
                <a href="actualite.php" class='link-actu'>
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