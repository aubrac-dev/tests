<!DOCTYPE html>
<html lang="fr">
<!-- Construire des requêtes en fonction de variables -->

<head>
    <title>DataBase</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
    <?php   // La solution : les requêtes préparées
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '123456');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
    // La mauvaise idée : concaténer une variable dans une requête
    // $reponse = $bdd->query('SELECT nom FROM jeux_video WHERE possesseur=\'' . $_GET['possesseur'] . '\'');
    // Danger: Sql Injection !!!

    // Avec des marqueurs « ? »
    $req = $bdd->prepare('SELECT nom, prix FROM jeux_video WHERE possesseur = ?  AND prix <= ? ORDER BY prix');
    $req->execute(array($_GET['possesseur'], $_GET['prix_max']));

    echo '<ul>';
    while ($donnees = $req->fetch()) {
        echo '<li>' . $donnees['nom'] . ' (' . $donnees['prix'] . ' EUR)</li>';
    }
    echo '</ul>';

    echo '<hr>';
    if (isset($_GET['possesseur']) && isset($_GET['prix_max'])) {
        // Avec des marqueurs nominatifs
        $req = $bdd->prepare('SELECT nom, prix FROM jeux_video WHERE possesseur = :possesseur AND prix <= :prixmax');
        $req->execute(array('possesseur' => $_GET['possesseur'], 'prixmax' => $_GET['prix_max']));

        echo '<ul>';
        while ($donnees = $req->fetch()) {
            echo '<li>' . $donnees['nom'] . ' (' . $donnees['prix'] . ' EUR)</li>';
        }
    }
    echo '</ul>';

    $req->closeCursor();
    ?>
</body>

</html>