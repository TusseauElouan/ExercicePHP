<?php 
    require_once "pdo.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualités</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'header.php'?>
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
                    $sql = 'SELECT * FROM actualites';
                    $temp = $pdo->query($sql);

                    $sql2 = 'SELECT auteurs.nom, auteurs.prenom FROM auteurs, actualites WHERE auteurs.id_auteur = actualites.id_auteur ORDER BY date_revision LIMIT 5';
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
                        echo "  <a href='article.php?id=".$resultat['id_actualite']."' class='link-actu'>
                                    <div class='actualite'>
                                        <div class='img-actu-container'>
                                            <img src='".$url_image."' alt='Image Actu' title='Image Actu' class='img-actu'/>
                                        </div>
                                        <div class='content-actu'>
                                            <p class='tags'>Tags : ".$tag."</p>
                                            <p class='date_modif'>Dernière modification : ".$date_modif."</p>
                                            <h3 class='titre_actu'>".$titre."</h3>
                                            <p class='texte-content'>".substr($texte, 0, 100) ."...</p>
                                            <p class='auteurs'>Auteur : ".$nom_auteur. " ". $prenom_auteur ."</p>
                                            <p class='date_publi'>Date de publication : ".$date_publi."</p>
                                            <p class='sources'>Sources : ".$sources."</p>
                                        </div>
                                    </div>
                                </a>";
                    }
                ?>
                <a href="actualite.php" class='link-actu'>
                    <div class='actualite'>
                        <div class="centrer">
                            <h3>En savoir plus...</h3>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </main>
    <?php 
    include 'footer.php'
    ?>
</body>
</html>