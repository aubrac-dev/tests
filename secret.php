<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Envoi de paramètres dans l'URL</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>

    <?php
    $_POST['mot_de_passe'] = (string) $_POST['mot_de_passe'];
    if (isset($_POST['mot_de_passe'])) {
        if ($_POST['mot_de_passe'] == 'kangourou') {
            echo ('<p>Mot de pass ' . $_POST['mot_de_passe'] . ' OK.</p>');
        } else {
    ?>
            <p> Mot de passe <?php echo $_POST['mot_de_passe']; ?> incorrect:</br>
                Si tu veux changer de saisir, <a href="formulaire.php">clique ici</a>
                pour revenir à la page formulaire.php.
            </p>
        <?php
        }
    } else {
        ?>
        <p> ATTENTION <a href="formulaire.php">Veuillez entrer un mot de passe!</a>dans la page formulaire.php.</p>
    <?php
    }
    ?>

</body>

</html>