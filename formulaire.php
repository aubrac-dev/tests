<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Envoi de paramètres dans le formulaire</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>

    <p>
        Veuillez taper votre mot de pass :
    </p>
    <form action="secret.php" method="post">
        <p>
            <label for="pwd">Mot de pass:</label>
            <input type="password" id="pwd" name="mot_de_passe" />
            <input type="submit" value="Valider" />
        </p>
    </form>
</body>

</html>