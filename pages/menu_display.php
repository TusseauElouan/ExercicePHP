<?php
    include_once '../include/Categorie.php';
    if (isset($_REQUEST['id'])) {
        $id = htmlentities($_REQUEST['id']);

        //Catégorie principale
        $res_categorie = Categorie::getCategorie($id);
        $affichage_categorie = new Categorie($res_categorie[0]);

        //Sous catégorie de la catégorie principale
        $res_sous_categories = Categorie::getSousMenu($affichage_categorie->getId());
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catégorie | <?= $affichage_categorie->getNom()?></title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php
        include_once '../include/header.php';
    ?>
    <main>
        <h1>Catégorie : <?= $affichage_categorie->getNom()?></h1>
        <br/>
        <h2>Liste des sous catégories:</h2>
        <ul>
        <?php 
            if (count($res_sous_categories) > 0) {
            for ($index = 0; $index < count($res_sous_categories); $index++){
                $affichage_sous_categorie = new Categorie($res_sous_categories[$index]);
                $affichage_sous_categorie->afficher();
            }
        } else {
            echo "<h3>Aucune sous-catégorie.</h3>";
        }
        ?>
        </ul>
    </main>
    <?php
        include_once '../include/footer.php';
    ?>
    
</body>
</html>