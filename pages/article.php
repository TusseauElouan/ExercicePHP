<?php 
    require_once "../include/actualite.php";

    if (isset($_REQUEST['id'])){
        $id = htmlentities($_REQUEST['id']);
        $resultat = Actualite::getArticleAuteur($id);
        $resultat2 = Actualite::getArticle($id);

        $actualite = new Actualite($resultat2[0], $resultat[0]);
    }

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article | <?php echo $actualite->getTitre();?></title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        include '../include/header.php'
    ?>
    <main>
        <div class='content-container-page'>
            <div class='img-actualite-page'>
                <img src="../<?= $actualite->getUrlImage()?>" alt="Image Actu" title="Image Actu" class='img-actu' />
            </div>
            <div class='content-page'>
                <p>Dernière date de modification : <?= $actualite->getDateModif()?></p>
                <p>Tags : <?= $actualite->getTag()?></p>
                <h2 class='titre_actu'><?= $actualite->getTitre()?></h2>
                <p class='texte-content'><?= $actualite->getText()?></p>
                <p>Auteur : <?= $actualite->getNomAuteur()?> <?= $actualite->getPrenomAuteur()?></p>
                <p>Date de publication : <?= $actualite->getDatePubli()?></p>
                <p class='sources'>Sources : <?= $actualite->getSources()?></p>
            </div>
        </div>
    </main>
    <?php
    include '../include/footer.php'
    ?>
</body>
</html>