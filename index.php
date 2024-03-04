<?php 
    require_once "include/pdo.php";
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
                <h2 id="accueil">Bienvenue sur votre site remplie d'actualités !</h2>
            </div>
        </div>
        <div>
            <h2 id="actus">Actualités</h2>
            <div class="actus-container">
                <?php 
                    $sql = 'SELECT * FROM actualites ORDER BY date_revision DESC LIMIT 5';
                    $temp = $pdo->query($sql);

                    $sql2 = 'SELECT auteurs.nom, auteurs.prenom FROM auteurs, actualites WHERE auteurs.id_auteur = actualites.id_auteur ORDER BY actualites.date_revision DESC LIMIT 5';
                    $temp2 = $pdo->query($sql2);
                    while (($resultat = $temp->fetch()) && ($resultat2 = $temp2->fetch())){
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
                <?php
                    }
                ?>
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