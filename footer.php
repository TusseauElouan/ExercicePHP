<?php 
    if (isset($_REQUEST['nom'], $_REQUEST['prenom'], $_REQUEST['mail'])){
        $sql = 'INSERT INTO contacts(nom, prenom, mail) VALUES ("'.$_REQUEST['nom'].'", "'.$_REQUEST['prenom'].'", "'.$_REQUEST['mail'].'")';
        $temp = $pdo->exec($sql);
        $message = 'Votre contacte a été enregistré !';
    }

?>

<footer>
    <h2 id='form'>Formulaire de contact</h2>
    <form action="#form" method='post' class='formulaire_contact'>
        <label for="nom">Nom</label>
        <input type="text" id='nom' name='nom'required/>
        <label for="prenom">Prénom</label>
        <input type="text" id="prenom" name='prenom'required/>
        <label for="mail">Mail</label>
        <input type="email" id='mail' name='mail'required/>
        <input type="submit"/>
        <p>
            <?php 
        
        if (isset($_REQUEST['nom'], $_REQUEST['prenom'], $_REQUEST['mail'])){
            echo $message;
        }?></p>
    </form>
    <div>
        <a href="mention.php">Mention Légal</a>
        <a href="condition.php">Condtion d'utilisation</a>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2708.181354992621!2d-2.2610377232932706!3d47.252156912385836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480568bfdf4e941b%3A0x36440760236165cc!2s1%20Bd%20de%20l&#39;Universit%C3%A9%2C%2044600%20Saint-Nazaire!5e0!3m2!1sfr!2sfr!4v1709133329146!5m2!1sfr!2sfr" width="600" height="450" style="border:1px solid black;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</footer>