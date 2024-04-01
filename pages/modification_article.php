<?php
    require_once '../include/ArticleAdmin.php';
    if (isset($_REQUEST['id'])){
        $id = htmlentities($_REQUEST['id']);
        $resultat = ArticleAdmin::getArticleOrPages($id, 'actualites', 'id_actualite');
        if (isset($_REQUEST['titre'])){
            ArticleAdmin::updateArticleOrPages($_REQUEST, 'actualites');
            header('Location:admin.php?id=1');
        }
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification d'un article</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php
        include '../include/header.php'
    ?>

    <main>
        <form action="" method="post">
            <h1>Modification d'un article</h1>
            <label for="titre">Titre</label>
            <input type="text" name="titre" id="titre" value="<?= $resultat[0]['titre'];?>">
            <label for="text">Texte</label>
            <textarea name="text" id="text" cols="30" rows="10"><?= $resultat[0]['corp_texte'];?></textarea>
            <label for="tags">Tags</label>
            <input type="text" name="tags" id="tags" value="<?= $resultat[0]['tags']?>">
            <label for="sources">Sources</label>
            <input type="text" name="sources" id="sources" value="<?= $resultat[0]['sources']?>">
            <input type="submit" value="Modifier">
        </form>
    </main>

    <?php
        include '../include/footer.php';
    ?>
</body>
</html>