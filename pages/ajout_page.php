<?php
    require_once '../include/PagesAdmin.php';
    if (isset($_REQUEST['titre'])) {
        PagesAdmin::ajouterArticleOrPages($_REQUEST, 'pages');
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une page</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
    include_once '../include/header.php';
    ?>
    <main>
        <form action="" method='POST'>
            <label for="titre">Titre</label>
            <input type="text" name="titre" id="titre" placeholder="Titre de la page" required>
            <label for="text">Texte</label>
            <textarea name="text" id="text" cols="30" rows="10" placeholder="Texte de la page" required></textarea>
            <label for="auteur" >Auteur</label>
            <select name="auteur" id="auteur" required>
                <?php
                $resultat = PagesAdmin::getAllAuteur();
                for ($i = 0; $i < count($resultat); $i++){
                    echo '<option value="'.$resultat[$i]['id_auteur'].'">'.$resultat[$i]['nom']. ' '. $resultat[$i]['prenom'].'</option>';
                }
               ?>
            </select>
            <label for="tags">Tags</label>
            <input type="text" name='tags' id='tags' placeholder="Les tags de la page" required>
            <label for="sources">Sources</label>
            <input type="text" name='sources' id='sources' placeholder="Les sources de la page" required>
            <input type="submit" value="Ajouter">
        </form>
    </main>
    <?php 
    include_once '../include/footer.php';
    ?>
</body>
</html>