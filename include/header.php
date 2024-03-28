<?php
require_once 'Menu.php';
    $page = basename($_SERVER["PHP_SELF"]);
?>
<header>
    <div class="logo-container">
        <img class="logo" src="<?php if ($page != 'index.php'){ echo '../';} ?>imgs/logo.jfif" alt="Logo" title="Logo"/>
        <h1 class="title-header">Actualités</h1>
    </div>
    <div class="nav-container">
        <nav>
            <ul>
                <li><a href="../index.php">Accueil</a></li>
                <li><a href="admin.php">Administration</a></li>
            <?php
                $res_categorie = Menu::getMenu();
                for ($i = 0; $i < count($res_categorie); $i++){
                    $categorie = new Menu($res_categorie[$i]);
                    $res_sous_categorie = Menu::getMenuByCategorie($categorie->getId());
                    
                    if ($res_sous_categorie != null){
            ?>
                        <li class="deroulant"><a href="menu_display.php?id=<?= $categorie->getId();?>"><?= $categorie->getNom(); ?> &ensp;</a>
                            <ul class="sous">
            <?php
                        for ($j = 0; $j < count($res_sous_categorie); $j++){
                            $sous_categorie = new Menu($res_sous_categorie[$j]);
                            if ($sous_categorie != null){
            ?>
                                <li><a href="menu_display.php?id=<?= $sous_categorie->getId();?>"><?= $sous_categorie->getNom(); ?></a></li>
            <?php
                            }
                        }
            ?>
                            </ul>
            <?php
                        
                    } else{
                        echo '<li><a href="menu_display.php?id='. $categorie->getUrl() .'">'. $categorie->getNom() .'</a></li>';
                    }
                }
                
            ?>
            </ul>
            <?php
            
            ?>
        </nav>
    </div>
</header>