<?php
    if(isset($_POST['envoyer'])) {
        echo "Traitement en cours ...";
        sleep(3);
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $description = $_POST['description'];
        
        echo "<br/>Les informations du formulaire sont : <br />";
        echo "nom = " . $nom . "<br />";
        echo "email = ". $email . "<br />";
        echo "description = " . $description;
    }
?>