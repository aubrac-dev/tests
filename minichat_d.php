<!DOCTYPE html>
<html lang="fr">

<head>
    <title>TP: un minichat</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>

    <form action="minichat_post_d.php" method="post">
        <p>
            <label for="pseudo">Pseudo:</label><br>
            <input type="text" id="pseudo" name="pseudo" /><br>
            <label for="message">Message:</label><br>
            <input type="text" id="message" name="message" /><br>
            <input type="submit" value="Envoyer" /><br><br>
        </p>
    </form>

    <?php
    // bdd - ouvrir con
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '123456', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    // sql - extraire les 10 derniers messages
    $reponse = $bdd->query('SELECT pseudo, message FROM minichat ORDER BY id DESC LIMIT 0, 10');

    //  la liste des 10 derniers messages
    echo '<p>Minichat - voici les 10 derniers messages :</p>';
    while ($donnees = $reponse->fetch()) {
        echo '<strong>' . $donnees['pseudo'] . ' : ' . '</strong>' . $donnees['message'] . '<br />';
    }

    // bdd - fermer con
    $reponse->closeCursor();
    ?>

</body>

</html>