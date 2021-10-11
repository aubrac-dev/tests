<?php
// Les boucles

// Une boucle simple : while

$continuer_boucle = true;

while ($continuer_boucle == true)   // TANT QUE $continuer_boucle  est vrai, exécuter ces instructions.
{
    // instructions à exécuter dans la boucle
    $continuer_boucle = false;
}

// ex 1

$nombre_de_lignes = 1;

while ($nombre_de_lignes <= 100) {  // Il faut TOUJOURS s'assurer que la condition sera fausse au moins une fois. Si elle ne l'est jamais, alors la boucle s'exécutera à l'infini !
    echo 'Je ne dois pas regarder les mouches voler quand j\'apprends le PHP.<br />';
    $nombre_de_lignes++; // $nombre_de_lignes = $nombre_de_lignes + 1
}

// ex 2

$nombre_de_lignes = 1;

while ($nombre_de_lignes <= 100) {
    echo 'Ceci est la ligne n°' . $nombre_de_lignes . '<br />';
    $nombre_de_lignes++;
}

// Une boucle plus complexe : for

for ($nombre_de_lignes = 1; $nombre_de_lignes <= 100; $nombre_de_lignes++) {
    echo 'Ceci est la ligne n°' . $nombre_de_lignes . '<br />';
}
