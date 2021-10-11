<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Envoi de paramètres dans le formulaire</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>

    <p>
        Cette page ne contient que du HTML.<br />
        Veuillez taper votre prénom :
    </p>

    <form action="cible.php" method="post">
    <p>
        <input type="text" name="prenom" />
        <input type="submit" value="Valider" />
    </p>
    </form>

</body>

</html>