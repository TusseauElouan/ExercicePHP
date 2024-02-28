<?php 

    require_once "pdo.php";

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
        include 'header.php'
    ?>
    <main>
        <div class='content-container-page'>
            <div class='img-actualite-page'>
                <img src="<?php echo $url_image?>" alt="Image Actu" title="Image Actu" class='img-actu' />
            </div>
            <div class='content-page'>
                <p>Dernière date de modification : <?php echo $date_modif; ?></p>
                <p>Tags : <?php echo $tag; ?></p>
                <h2 class='titre_actu'><?php echo $titre; ?></h2>
                <p class='texte-content'><?php echo $texte; ?></p>
                <p>Auteur : <?php echo $nom_auteur . $prenom_auteur; ?></p>
                <p>Date de publication : <?php echo $date_publi; ?></p>
                <p class='sources'>Sources : <?php echo $sources; ?></p>
            </div>
        </div>
    </main>
    <?php
    include 'footer.php'
    ?>
</body>
</html>