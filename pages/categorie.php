<?php
    if (isset($_REQUEST['id'])){
        $message = Menu::afficherCategorie($_REQUEST['id']);
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catégorie</title>
</head>
<body>
    <?php
        include_once "../include/header.php";
    ?>
    <main>

    </main>
    <?php
        include_once "../include/footer.php";
    ?>
</body>
</html>