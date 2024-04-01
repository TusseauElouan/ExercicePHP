<?php
    require_once '../include/ArticleAdmin.php';
    if (isset($_REQUEST['titre'])) {
        ArticleAdmin::ajouterArticleOrPages($_REQUEST, 'actualites');
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un article</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
    include_once '../include/header.php';
    ?>
    <main>
        <form action="" method='POST'>
            <label for="titre">Titre</label>
            <input type="text" name="titre" id="titre" placeholder="Titre de l'article" required>
            <label for="text">Texte</label>
            <textarea name="text" id="text" cols="30" rows="10" placeholder="Texte de l'article" required></textarea>
            <label for="auteur" >Auteur</label>
            <select name="auteur" id="auteur" required>
                <?php
                $resultat = ArticleAdmin::getAllAuteur();
                for ($i = 0; $i < count($resultat); $i++){
                    echo '<option value="'.$resultat[$i]['id_auteur'].'">'.$resultat[$i]['nom']. ' '. $resultat[$i]['prenom'].'</option>';
                }
               ?>
            </select>
            <label for="tags">Tags</label>
            <input type="text" name='tags' id='tags' placeholder="Les tags de l'article" required>
            <label for="sources">Sources</label>
            <input type="text" name='sources' id='sources' placeholder="Les sources de l'article" required>
            <input type="submit" value="Ajouter">
        </form>
    </main>
    <?php 
    include_once '../include/footer.php';
    ?>
</body>
</html>