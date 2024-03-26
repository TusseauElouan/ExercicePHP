<?php
    require_once '../include/menu.php';
    if(isset($_REQUEST['id'])){
        $id = htmlentities($_REQUEST['id']);
        Menu::deleteMenuById($id);
        header ('Location: admin.php');
    }
?>

<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Administration</title>
        <link rel="stylesheet" href="../style.css">
    </head>

        <body>
        <?php
            include_once '../include/header.php';
        ?>
            <main>
                <div>
                    <h1>Administration</h1> 
                    <a href="ajout_categorie.php"><img src="../imgs/add-circle-outline.svg" alt="Ajouter" title="Ajouter" class="img-add"></a>
                    <table border='1px'>
                        <tr>
                            <th>ID</th>
                            <th>NOM</th>
                            <th>APPARTENANT A</th>
                            <th>MODIFICATION</th>
                        </tr>
                        <?php
                            $resultat = Menu::getAllMenu();
                            for ($i = 0; $i < count($resultat); $i++){
                                $menu = new Menu($resultat[$i])
                        ?>  
                            <tr>
                                <td><?= $menu->getId()?></td>
                                <td><?= $menu->getNom()?></td>
                                <td>
                                <?php
                                    if ($menu->getCategorieId() != null){
                                        $resultat_categorie = Menu::getMenuById($menu->getCategorieId());
                                        echo $resultat_categorie[0]['nom'];
                                    } else{
                                        echo 'Aucune catégorie';
                                    }
                                ?>
                                </td>
                                <td>
                                    <a href="modification_categorie.php?id=<?= $menu->getId();?>"><img src="../imgs/pencil-outline.svg" alt="Modifier" title="Modifier" class="imgs-modif"></a>
                                    <a href="admin.php?id=<?= $menu->getId()?>" class='delete-button'><img src="../imgs/trash-outline.svg" alt="Supprimer" title="Supprimer" class="imgs-modif"></a>
                                </td>
                            </tr>
                        <?php    
                            }
                        ?>
                    </table>
                </div>
                <script src="../script.js"></script>
            </main>
            <?php
            include_once '../include/footer.php';
            ?>
        </body>

    </html>