<?php
require_once 'menu.php';
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
                <li><a href="index.php">Accueil</a></li>
                <li><a href="pages/admin.php">Administration</a></li>
            <?php
                $resultat = Menu::getMenu();
                for ($i = 0; $i < count($resultat); $i++) {
                    $menu_base = new Menu($resultat[$i]);
                    $resultat2 = Menu::getMenuByCategorie($menu_base->getId());
                    if ($resultat2 != null){
            ?>
                <li class="deroulant"><a href="pages/<?= $menu_base->getUrl();?>"><?= $menu_base->getNom(); ?> &ensp;</a>
                    <ul class="sous">
                    <?php
                        for ($j = 0; $j < count($resultat2); $j++){
                            $menu = new Menu($resultat2[$j]);
                            if ($menu != null){
                    ?>
                        <li><a href="pages/<?= $menu->getUrl();?>"><?= $menu->getNom(); ?></a></li>
                    <?php
                            }
                    ?>
                    </ul>
            <?php
                        }
                    } else{
                        echo '<li><a href="pages/'. $menu_base->getUrl() .'">'. $menu_base->getNom() .'</a></li>';
                    }
                }
            ?>
            </ul>
        </nav>
    </div>
</header>