<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Réception de paramètres dans l'URL</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
    <?php
    if (isset($_GET['prenom']) and isset($_GET['nom'])) // On a le nom et le prénom
    {
        echo 'Bonjour ' . $_GET['prenom'] . ' ' . $_GET['nom'] . ' !';
    } else // Il manque des paramètres, on avertit le visiteur
    {
        echo 'Il faut renseigner un nom et un prénom !';
    }
    ?>
</body>

</html>