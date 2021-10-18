<?php

if (isset($_POST['pseudo']) and isset($_POST['message'])) {
    // protège les données contre l'injection SQL !
    $_POST['pseudo'] = strip_tags($_POST['pseudo']); // supprimer toutes les balises html     
    $_POST['message'] = strip_tags($_POST['message']); // supprimer toutes les balises html 

    if (trim($_POST['pseudo']) != '' &&  trim($_POST['message']) != '') { // vérifier les messages vides - empêche leur transmission à bdd
        // bdd - ouvrir con
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '123456', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        // Effectuer ici la requête qui insère le message - grâce à une requête préparée
        $req = $bdd->prepare('INSERT INTO minichat(pseudo, message) VALUES(:pseudo, :message)');
        $req->execute(array(
            'pseudo' => $_POST['pseudo'],
            'message' => $_POST['message']
        ));

        // bdd - fermer con
        $req->closeCursor();
    }
} else {
    echo '<script type="text/javascript">alert(\'Il faut envoyer des messages !\')</script>';
}
// Puis rediriger vers minichat_a.php comme ceci :
header('Location: minichat_a.php');
