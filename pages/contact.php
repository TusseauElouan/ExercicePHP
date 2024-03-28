<?php 
    require_once 'include/Contact_class.php';
    if (isset($_REQUEST['nom'], $_REQUEST['prenom'], $_REQUEST['mail'])){
        //Ajout du contact
        Contact::insertInBDD($_REQUEST);
        $message = 'Votre contact a été enregistré !';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
    include '../include/header.php'
    ?>
    <main class='main-contact'>
        <div class='formulaire-container'>
            <h2 id='form'>Formulaire de contact</h2>
            <form action="" method='post' class='formulaire_contact'>
                <label for="nom">Nom</label>
                <input type="text" id='nom' name='nom'required/>
                <label for="prenom">Prénom</label>
                <input type="text" id="prenom" name='prenom'required/>
                <label for="mail">Mail</label>
                <input type="email" id='mail' name='mail'required/>
                <input type="submit" class='submit'/>
                <p class='ajoute'>
                <?php 
                if (isset($message)){
                    echo $message;
                }?>
                </p>
        </div>
    </main>
    <?php
    include '../include/footer.php'
    ?>
</body>
</html>