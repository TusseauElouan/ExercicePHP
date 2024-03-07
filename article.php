<?php 

    require_once "include/pdo.php";
    require_once "include/actualite.php";

    if (isset($_REQUEST['id'])){
        $sql = 'SELECT * FROM actualites WHERE id_actualite='.$_REQUEST['id'];
        $temp = $pdo->query($sql);
        
        $sql2 = 'SELECT auteurs.nom, auteurs.prenom FROM auteurs, actualites WHERE auteurs.id_auteur = actualites.id_auteur AND actualites.id_actualite = '.$_REQUEST['id'];
        $temp2 = $pdo->query($sql2);

        $resultat = $temp->fetch();
        $resultat2 = $temp2->fetch();

        $nom_auteur = $resultat2['nom'];
        $prenom_auteur = $resultat2['prenom'];

        $titre = $resultat['titre'];
        $texte = $resultat['corp_texte'];
        $url_image = $resultat['image'];
        $date_publi = $resultat['date_publication'];
        $date_modif = $resultat['date_revision'];
        $tag = $resultat['tags'];
        $sources = $resultat['sources'];

        $actualite = new Actualite($resultat['id_actualite'], $titre, $texte, $url_image, $nom_auteur, $prenom_auteur, $tag, $date_modif, $date_publi, $sources);
    }

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article | <?php echo $titre;?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        include 'include/header.php'
    ?>
    <main>
        <div class='content-container-page'>
            <div class='img-actualite-page'>
                <img src="<?= $actualite->getUrlImage()?>" alt="Image Actu" title="Image Actu" class='img-actu' />
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
    include 'include/footer.php'
    ?>
</body>
</html>