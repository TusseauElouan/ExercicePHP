<?php
require_once 'menu.php';
    $page = basename($_SERVER["PHP_SELF"]);
    $resultat = Menu::getMenu();
?>
<header>
    <div class="logo-container">
        <img class="logo" src="<?php if ($page != 'index.php'){ echo '../';} ?>imgs/logo.jfif" alt="Logo" title="Logo"/>
        <h1 class="title-header">Actualités</h1>
    </div>
    <div class="nav-container">
        <nav>
            <?php
                if ($page == 'index.php') {
                    echo '<a href="index.php">Accueil</a>';
                    echo '<a href="pages/admin.php">Administration</a>';
                } else{
                    echo '<a href="../index.php">Accueil</a>';
                    echo '<a href="admin.php">Administration</a>';
                };
            ?>
        </nav>
    </div>
</header>