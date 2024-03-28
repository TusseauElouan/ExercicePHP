<?php
require_once '../include/Menu.php';
    if (isset($_REQUEST['id'])) {
        $id = htmlentities($_REQUEST['id']);
        $resultat = Menu::getMenuById($id);
        $menu = new Menu($resultat[0]);
    }

    if (isset($_REQUEST['nom'], $_REQUEST['categorie'])){
        Menu::updateMenu($_REQUEST);
        $message = 'Votre menu a été enregistré !';
        header('Location: modification_categorie.php?id='.$id);
    }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification d'une catégorie</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php
        include_once '../include/header.php';
    ?>
    <main>
        <h1>Modification d'une catégorie</h1>
        <form action="" method="POST">
            <label for="nom">Nom de la catégorie</label>
            <input type="text" name="nom" id="nom" placeholder="Nom de la catégorie" value="<?= $menu->getNom()?>">
            <label for="categorie">Catégorie associée</label>
            <select name="categorie" id="categorie">
                <option value="" selected>Aucune</option>
                <?php
                    $resultat2 = Menu::getAllMenu();
                    for ($i = 0; $i < count($resultat2); $i++){
                        $menu2 = new Menu($resultat2[$i]);
                ?>
                    <option value="<?= $menu2->getId()?>" <?php if ($menu->getCategorieId() == $menu2->getId()){ echo ' selected';};?>><?= $menu2->getNom()?></option>
                <?php
                    }
                ?>
            </select>
            <input type="submit" value="Modifier">
        </form>
    </main>
    <?php
        include_once '../include/footer.php';
    ?>
</body>
</html>