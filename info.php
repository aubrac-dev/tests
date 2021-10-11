<?php
// Les fonctions
/*
    - les fonctions permettent d'éviter d'avoir à répéter du code PHP que l'on utilise souvent,
    - et qui automatisent grandement la plupart des tâches courantes.
*/

// PHP propose des centaines et des centaines de fonctions prêtes à l'emploi
/*
    une fonction qui permet de rechercher et de remplacer des mots dans une variable ;
    une fonction qui envoie un fichier sur un serveur ;
*/

// 1.1 Traitement des chaînes de caractères

// 1.1.1  strlen  : longueur d'une chaîne

$phrase = 'Bonjour tout le monde ! Je suis une phrase !';
$longueur = strlen($phrase);

echo 'La phrase ci-dessous comporte ' . $longueur . ' caractères :<br />' . $phrase;

// 1.1.2 str_replace  : rechercher et remplacer
// remplace une chaîne de caractères par une autre

$ma_variable = str_replace('b', 'p', 'bim bam boum');

echo $ma_variable;

// 1.1.3 str_shuffle  : mélanger les lettres

$chaine = 'Cette chaîne va être mélangée !';    // mélanger aléatoirement les caractères
$chaine = str_shuffle($chaine);

echo $chaine;

// 1.1.4.1 strtolower  : écrire en minuscules

$chaine = 'COMMENT CA JE CRIE TROP FORT ???';
$chaine = strtolower($chaine);

echo $chaine;

// 1.1.4.2 strtoupper  qui fait la même chose en sens inverse : minuscules → majuscules.

// 1.1.5 Récupérer la date

// Enregistrons les informations de date dans des variables

$jour = date('d');
$mois = date('m');
$annee = date('Y');

$heure = date('H');
$minute = date('i');

// Maintenant on peut afficher ce qu'on a recueilli
echo 'Bonjour ! Nous sommes le ' . $jour . '/' . $mois . '/' . $annee . 'et il est ' . $heure . ' h ' . $minute;

// 2. Créer ses propres fonctions

//  En général, si vous effectuez des opérations un peu complexes 
//  que vous pensez avoir besoin de refaire régulièrement, il est conseillé de créer une fonction.

// 2.1 ex 1 bonjour

$nom = 'Sandra';
echo 'Bonjour, ' . $nom . ' !<br />';

$nom = 'Patrick';
echo 'Bonjour, ' . $nom . ' !<br />';

$nom = 'Claude';
echo 'Bonjour, ' . $nom . ' !<br />';

// nous allons créer une fonction qui le fait à notre place

function DireBonjour($nom)
{
    echo 'Bonjour ' . $nom . ' !<br />';
}

DireBonjour('Marie');
DireBonjour('Patrice');
DireBonjour('Edouard');
DireBonjour('Pascale');
DireBonjour('François');
DireBonjour('Benoît');
DireBonjour('Père Noël');



// 2.2 Deuxième exemple : une fonction qui renvoie une valeur / ex. 2 - calculer le volume d'un cône

// Calcul du volume d'un cône de rayon 5 et de hauteur 2
$volume = 5 * 5 * 3.14 * 2 * (1 / 3);
echo 'Le volume du cône de rayon 5 et de hauteur 2 est : ' . $volume . ' cm<sup>3</sup><br />';

// Calcul du volume d'un cône de rayon 3 et de hauteur 4
$volume = 3 * 3 * 3.14 * 4 * (1 / 3);
echo 'Le volume du cône de rayon 3 et de hauteur 4 est : ' . $volume . ' cm<sup>3</sup><br />';

// créer une fonction VolumeCone  , qui va calculer le volume du cône en fonction du rayon et de la hauteur

// Ci-dessous, la fonction qui calcule le volume du cône
function VolumeCone($rayon, $hauteur)
{
    $volume = $rayon * $rayon * 3.14 * $hauteur * (1 / 3); // calcul du volume
    return $volume; // indique la valeur à renvoyer, ici le volume
}

$volume = VolumeCone(3, 1);
echo 'Le volume d\'un cône de rayon 3 et de hauteur 1 est de ' . $volume;

// La fonction renvoie une valeur, que l'on doit donc récupérer dans une variable :

$volume = VolumeCone(3, 1);

// Ensuite, on peut afficher ce que contient la variable à l'aide d'une instruction echo  .