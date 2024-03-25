<?php
    require_once '../include/menu.php';
?>

<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Administration</title>
        <link rel="stylesheet" href="../style.css">
    </head>
        <?php
            include_once '../include/header.php';
        ?>
        <body>
            <div>
                <h1>Administration</h1> 
                <a href="ajout_categorie.php">Ajouter</a>
                <table border='1px'>
                    <tr>
                        <th>ID</th>
                        <th>NOM</th>
                        <th>PAGE</th>
                        <th>APPARTENANT A</th>
                    </tr>
                    <?php
                        $resultat = Menu::getAllMenu();
                        for ($i = 0; $i < count($resultat); $i++){
                            $menu = new Menu($resultat[$i])
                    ?>  
                        <tr>
                            <td><?php echo $menu->getId()?></td>
                            <td><?php echo $menu->getNom()?></td>
                            <td><?php echo $menu->getUrl()?></td>
                            <td>
                            <?php
                                if ($menu->getCategorieId() != null){
                                    $resultat_categorie = Menu::getMenuById($menu->getId(), $menu->getCategorieId());
                                    echo $resultat_categorie[0]['nom'];
                                } else{
                                    echo 'Aucune catégorie';
                                }
                            ?>
                            </td>
                        </tr>
                    <?php    
                        }
                    ?>
                </table>
            </div>
        </body>
        <?php
            include_once '../include/footer.php';
        ?>
    </html>