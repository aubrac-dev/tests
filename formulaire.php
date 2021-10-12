<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Page protégée par mot de passe</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
    <?php
    // Le mot de passe n'a pas été envoyé ou n'est pas bon
    if (!isset($_POST['mot_de_passe']) or $_POST['mot_de_passe'] != "kangourou") {
        // Afficher le formulaire de saisie du mot de passe
    ?>
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

        <p>
            Cette page est réservée au personnel de la NASA.
            Si vous ne travaillez pas à la NASA, inutile d'insister vous ne trouverez jamais le mot de passe ! ;-)
        </p>
    <?php
    } else    // Le mot de passe a été envoyé et il est bon
    {
        // Afficher les codes secrets
    ?>
        <h1>Voici les codes d'accès :</h1>
        <p><strong>CRD5-GTFT-CK65-JOPM-V29N-24G1-HH28-LLFV</strong></p>

        <p>
            Cette page est réservée au personnel de la NASA. N'oubliez pas de la visiter régulièrement car les codes d'accès sont changés toutes les semaines.<br />
            La NASA vous remercie de votre visite.
        </p>
    <?php
    }
    ?>
</body>

</html>