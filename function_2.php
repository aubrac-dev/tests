<!DOCTYPE html>
<html lang="fr">
<!--  Les fonctions d'agrégat  -->

<head>
    <title>DataBase</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            width: 100%;
        }
    </style>
</head>

<body>
    <?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '123456');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    // afficher le prix moyen de tous les jeux :
    $reponse = $bdd->query('SELECT AVG(prix) AS prix_moyen FROM jeux_video');

    $donnees = $reponse->fetch(); // 'il n'y a qu'une seule entrée
    echo 'prix_moyen' . '<br />' . round($donnees['prix_moyen'], 2) . '<br />';

    echo '<hr>';

    // nous allons filtrer le résultat
    $reponse = $bdd->query('SELECT AVG(prix) AS prix_moyen FROM jeux_video WHERE possesseur=\'Patrick\'');

    $donnees = $reponse->fetch(); // 'il n'y a qu'une seule entrée
    echo 'prix_moyen pour Patrick' . '<br />' . round($donnees['prix_moyen'], 2) . '<br />';

    echo '<hr>';

    $reponse->closeCursor();

    /* 
    AVG : calculer la moyenne / SELECT AVG(prix) AS prix_moyen FROM jeux_video
    SUM : additionner les valeurs / SELECT SUM(prix) AS prix_total FROM jeux_video WHERE possesseur='Patrick'
    MAX : retourner la valeur maximale / SELECT MAX(prix) AS prix_max FROM jeux_video
    MIN : retourner la valeur minimale / SELECT MIN(prix) AS prix_min FROM jeux_video
    COUNT : compter le nombre d'entrées / SELECT COUNT(*) AS nbjeux FROM jeux_video
        WHERE                            / SELECT COUNT(*) AS nbjeux FROM jeux_video WHERE possesseur='Florent'
        DISTINCT                         / SELECT COUNT(DISTINCT possesseur) AS nbpossesseurs FROM jeux_video
    */

    ?>
</body>

</html>