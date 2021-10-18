<!DOCTYPE html>
<html lang="fr">
<!--  Les fonctions scalaires  -->

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
    // afficher les noms des jeux en majuscules :
    $reponse = $bdd->query('SELECT UPPER(nom) AS nom_maj FROM jeux_video');

    while ($donnees = $reponse->fetch()) {
        echo $donnees['nom_maj'] . '<br />';
    }

    echo '<hr>';

    //  récupérer le contenu des autres champs comme avant, sans forcément leur appliquer une fonction :
    $reponse = $bdd->query('SELECT UPPER(nom) AS nom_maj, possesseur, console, prix FROM jeux_video');

    echo '<table>';
    echo    '<tr>
            <th> nom_maj </th>
            <th> possesseur </th>
            <th> console </th>
            <th> prix </th>
            </tr>';
    while ($donnees = $reponse->fetch()) {
        echo '
            <tr>
             <td>' . $donnees['nom_maj'] . '</td>' .
            '<td>' . $donnees['possesseur'] . '</td>' .
            '<td>' . $donnees['console'] . '</td>' .
            '<td>' . $donnees['prix'] . '</td>
            </tr>';
    }
    echo '</table>';

    $reponse->closeCursor();

    /* 
    UPPER : convertir en majuscules / SELECT UPPER(nom) AS nom_maj FROM jeux_video
    LOWER : convertir en minuscules / SELECT LOWER(nom) AS nom_min FROM jeux_video
    LENGTH : compter le nombre de caractères / SELECT LENGTH(nom) AS longueur_nom FROM jeux_video
    ROUND : arrondir un nombre décimal / SELECT ROUND(prix, 2) AS prix_arrondi FROM jeux_video
    */

    ?>
</body>

</html>