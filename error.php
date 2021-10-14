<!DOCTYPE html>
<html lang="fr">

<head>
    <title>DataBase</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
    <?php   // Traquer les erreurs
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '123456', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    echo '<hr>';

    $reponse = $bdd->query('SELECT champinconnu FROM jeux_video');


    $req->closeCursor();
    ?>
</body>

</html>