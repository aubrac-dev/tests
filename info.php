<?php

// Codez proprement

// 1. Des noms clairs

// Des noms de variables peu clairs
$mess_page = 20;

$ret = $bdd->query('SELECT COUNT(*) AS nb FROM livre');

$data = $ret->fetch();
$total = $data['nb'];

$nb_total  = ceil($total / $mess_page);

echo 'Page : ';
for ($i = 1; $i <= $nb_total; $i++) {
    echo '<a href="livre.php?page=' . $i . '">' . $i . '</a> ';
}

// Des noms de variables beaucoup plus clairs

$nombreDeMessagesParPage = 20;

$retour = $bdd->query('SELECT COUNT(*) AS nb_messages FROM livre');
$donnees = $retour->fetch();
$totalDesMessages = $donnees['nb_messages'];

$nombreDePages  = ceil($totalDesMessages / $nombreDeMessagesParPage);

echo 'Page : ';
for ($page_actuelle = 1; $page_actuelle <= $nombreDePages; $page_actuelle++) {
    echo '<a href="livre.php?page=' . $page_actuelle . '">' . $page_actuelle . '</a> ';
}

// 2. Indentez votre code

// Avec un code non indenté

for ($ligne = 1; $ligne <= 100; $ligne++) {
    if ($ligne % 2 == 0) {
        echo $ligne . ' : <strong>ligne paire</strong>';
    } else {
        echo $ligne . ' : <em>ligne impaire</em>';
    }
    echo '<br />';
}

// Avec un code indenté

for ($ligne = 1; $ligne <= 100; $ligne++) {
    if ($ligne % 2 == 0) {
        echo $ligne . ' : <strong>ligne paire</strong>';
    } else {
        echo $ligne . ' : <em>ligne impaire</em>';
    }

    echo '<br />';
}

// 3. Un code correctement commenté

/*
Script "Questionnaire de satisfaction"
    Par M@teo21
    
Dernière modification : 20 août XXXX
*/

// On vérifie d'abord s'il n'y a pas de champ vide
if ($_POST['description'] == NULL or $_POST['mail'] == NULL) {
    echo 'Tous les champs ne sont pas remplis !';
} else // Si c'est bon, on enregistre les informations dans la base
{
    $bdd->prepare('INSERT INTO enquete VALUES (\'\', ?, ?)');
    $bdd->execute(array($_POST['description'], $_POST['mail']));

    // Puis on envoie les photos

    for ($numero = 1; $numero <= 3; $numero++) {
        if ($_FILES['photo' . $numero]['error'] == 0) {
            if ($_FILES['photo' . $numero]['size'] < 500000) {
                move_uploaded_file($_FILES['photo' . $numero]['tmp_name'], $numero . '.jpg');
            } else {
                echo 'La photo ' . $numero . 'n\'est pas valide.<br />';
                $probleme = true;
            }
        }
    }

    // Enfin, affichage d'un message de confirmation si tout s'est bien passé

    if (!(isset($probleme))) {
        echo 'Merci ! Les informations ont été correctement enregistrées !';
    }
}

// 4. Les standards

/*
 "PSR" (PHP Standards Recommendations)

 -la PSR-1, règles basiques en rapport avec le standard de codage ;

 -et la PSR-2, guide du coding style.

 PHPCS-Fixer.
*/