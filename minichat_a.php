<?php setcookie('pseudo', 'JohnSmith', time() + 365 * 24 * 3600, null, null, false, true); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <title>TP: un minichat</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        #chat_room,
        form {
            text-align: center;
        }
    </style>
</head>

<body>

    <form action="minichat_post_a.php" method="post">
        <p>
            <label for="pseudo">Pseudo:</label><br>
            <input type="text" id="pseudo" name="pseudo" value="<?php echo $_COOKIE['pseudo']; ?>" /><br>
            <label for="message">Message:</label><br>
            <input type="text" id="message" name="message" /><br>
            <input type="submit" value="Envoyer" /><br><br>
        </p>
    </form>
    <div id="chat_room">
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

        while ($donnees = $reponse->fetch()) {
            echo '<strong>' . htmlspecialchars($donnees['pseudo']) . ' : ' . '</strong>' . htmlspecialchars($donnees['message']) . '<br />';
        }

        // bdd - fermer con
        $reponse->closeCursor();
        ?>
    </div>
</body>

</html>