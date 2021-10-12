<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Page protégée par mot de passe</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>

    <p>
        Veuillez entrer le mot de passe pour obtenir les codes d'accès au serveur central de la NASA :
    </p>

    <form action="secret.php" method="post">
        <p>
            <label for="pwd">Mot de pass:</label>
            <input type="password" id="pwd" name="mot_de_passe" />
            <input type="submit" value="Valider" />
        </p>
    </form>

    <p>Cette page est réservée au personnel de la NASA.
        Si vous ne travaillez pas à la NASA, inutile d'insister vous ne trouverez jamais le mot de passe ! ;-)</p>
</body>

</html>