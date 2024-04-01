<?php
    require_once '../include/Menu.php';
    require_once '../include/ArticleAdmin.php';
    require_once '../include/PagesAdmin.php';
    require_once '../include/Contact.php';
    if(isset($_REQUEST['id'])){
        $id = htmlentities($_REQUEST['id']);
        if (isset($_REQUEST['delete_menu'])) {
            $delete = htmlentities($_REQUEST['delete_menu']);
            Menu::deleteById($delete, 'menus', 'id_menu');
            header ('Location: admin.php?id='.$id);
        }
        if (isset($_REQUEST['delete_actualite'])) {
            $delete = htmlentities($_REQUEST['delete_actualite']);
            ArticleAdmin::deleteById($delete, 'actualites', 'id_actualite');
            header ('Location: admin.php?id='.$id);
        }
        if (isset($_REQUEST['delete_page'])) {
            $delete = htmlentities($_REQUEST['delete_page']);
            PagesAdmin::deleteById($delete, 'pages', 'id_page');
            header ('Location: admin.php?id='.$id);
        }
        if (isset($_REQUEST['delete_contact'])) {
            $delete = htmlentities($_REQUEST['delete_contact']);
            Contact::deleteById($delete, 'contacts', 'id_contact');
            header ('Location: admin.php?id='.$id);
        }
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
                    
                    <ul>
                        <li><a href="admin.php?id=0">Afficher la modification des menus/catégories</a></li>
                        <li><a href="admin.php?id=1">Afficher la modification des articles</a></li>
                        <li><a href="admin.php?id=2">Afficher la modification des pages</a></li>
                        <li><a href="admin.php?id=3">Afficher les contacts</a></li>
                    </ul>

                    <?php
                        if (isset($id)){
                            switch ($id) {
                                case 0:
                                    echo '<a href="ajout_categorie.php"><img src="../imgs/add-circle-outline.svg" alt="Ajouter" title="Ajouter" class="img-add"></a>
                                            <table border="1px">
                                                <tr>
                                                    <th>ID</th>
                                                    <th>NOM</th>
                                                    <th>APPARTENANT A</th>
                                                    <th>MODIFICATION</th>
                                                </tr>';
                                    $resultat = Menu::getAll('menus');
                                    for ($i = 0; $i < count($resultat); $i++){
                                        $menu = new Menu($resultat[$i]);
                                        $menu->afficher();
                                    }
                                    echo '</table>';
                                    break;
                                case 1:
                                    echo '<a href="ajout_article.php"><img src="../imgs/add-circle-outline.svg" alt="Ajouter" title="Ajouter" class="img-add"></a>
                                            <table border="1px">
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>NOM</th>
                                                            <th>MODIFICATION</th>
                                                        </tr>';
                                    $resultat = ArticleAdmin::getAll('actualites');
                                    for ($i = 0; $i < count($resultat); $i++){
                                        $actualite = new ArticleAdmin($resultat[$i]);
                                        $actualite->afficher();
                                    }
                                    echo '</table>';
                                    break;
                                case 2:
                                    echo '<a href="ajout_page.php"><img src="../imgs/add-circle-outline.svg" alt="Ajouter" title="Ajouter" class="img-add"></a>
                                            <table border="1px">
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>NOM</th>
                                                            <th>MODIFICATION</th>
                                                        </tr>';
                                    $resultat = PagesAdmin::getAll('pages');
                                    for ($i = 0; $i < count($resultat); $i++){
                                        $page = new PagesAdmin($resultat[$i]);
                                        $page->afficher();
                                    }
                                    echo '</table>';
                                    break;
                                case 3:
                                    echo '<table border="1px">
                                            <tr>
                                                <th>ID</th>
                                                <th>NOM</th>
                                                <th>PRENOM</th>
                                                <th>MAIL</th>
                                                <th>MODIFICATION</th>
                                            </tr>';
                                        $resultat = Contact::getAll('contacts');
                                        for ($i = 0; $i < count($resultat); $i++){
                                            $contact = new Contact($resultat[$i]);
                                            $contact->afficher();
                                        }
                                    echo '</table>';
                                    break;
                                default:
                                    break;
                            }
                        }
                    ?>
                </div>
            </main>
            <?php
            include_once '../include/footer.php';
            ?>
        </body>

    </html>