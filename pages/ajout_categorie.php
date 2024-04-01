<?php
    require_once '../include/Menu.php';
    if (isset($_REQUEST['nom'], $_REQUEST['menu'])){
        Menu::AddMenu($_REQUEST);
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout d'une catégorie</title>
    <link rel="stylesheet" href="../style.css">
</head>

    <body>
        <?php
            include_once '../include/header.php';
        ?>
        <main>
            <form action="" method='POST'>
                <h2>Ajout d'une catégorie</h2>
                <div class="formulaire-container">
                    <label for="nom">Nom de la catégorie</label>
                    <input type="text" name="nom" id="nom" placeholder="Nom de la catégorie">
                </div>
                <div class="formulaire-container">
                    <select name="menu">
                        <option value="">Aucune</option>
                        <?php 
                        require_once "../include/menu.php";
                        $resultat = Menu::getAll('menus');
                        for($i = 0; $i < count($resultat); $i++){
                            $menu = new Menu($resultat[$i]);
                            echo '<option value="'.$menu->getId().'">'.$menu->getNom().'</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="formulaire-container">
                    <input type="submit" value="Ajouter la catégorie">
                </div>
            </form>
        </main>
        <?php
            include_once '../include/footer.php';
        ?>
    </body>

</html>