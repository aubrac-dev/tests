<!DOCTYPE html>
<html lang="fr">
<!--  GROUP BY et HAVING : le groupement de données  -->

<head>
    <title>DataBase</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
    <?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '123456');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    // GROUP BY : grouper des données
    // demander le prix moyen des jeux pour chaque console:
    $reponse = $bdd->query('SELECT AVG(prix) AS prix_moyen, console FROM jeux_video GROUP BY console');

    while ($donnees = $reponse->fetch()) {
        echo 'prix_moyen / console' . '<br />' . round($donnees['prix_moyen'], 2) . ' / ' . $donnees['console'] . '<br />';
    }
    echo '<hr>';

    // HAVING : filtrer les données regroupées
    $reponse = $bdd->query('SELECT AVG(prix) AS prix_moyen, console FROM jeux_video GROUP BY console HAVING prix_moyen <= 10');

    while ($donnees = $reponse->fetch()) {
        echo 'prix_moyen < 10 / console' . '<br />' . round($donnees['prix_moyen'], 2) . ' / ' . $donnees['console'] . '<br />';
    }
    echo '<hr>';

    /* La différence entre WHERE  et HAVING :
     Les deux permettent de filtrer, non ?
    - Oui, mais pas au même moment. 
        WHERE  agit en premier, avant le groupement des données, 
        tandis que HAVING  agit en second, après le groupement des données. 
    On peut d'ailleurs très bien combiner les deux, regardez l'exemple suivant :
    */
    $reponse = $bdd->query('SELECT AVG(prix) AS prix_moyen, console FROM jeux_video WHERE possesseur=\'Patrick\' GROUP BY console HAVING prix_moyen <= 10');

    while ($donnees = $reponse->fetch()) {
        echo 'prix_moyen < 10 pour Patrick / console' . '<br />' . round($donnees['prix_moyen'], 2) . ' / ' . $donnees['console'] . '<br />';
    }
    echo '<hr>';

    $reponse->closeCursor();

    /*
    HAVING  est un peu l'équivalent de WHERE  , mais il agit sur les données une fois qu'elles ont été regroupées. 
    C'est donc une façon de filtrer les données à la fin des opérations.
    */

    ?>
</body>

</html>