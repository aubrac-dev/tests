<?php
// Les tableaux - les arrays

$prenom = 'Nicole'; // Nom: $prenom, Valeur: Nicole
echo 'Bonjour ' . $prenom; // Cela affichera : Bonjour Nicole

// il est possible d'enregistrer de nombreuses informations dans une seule variable grâce aux tableaux

// 1. Les tableaux numérotés
// chaque case est identifiée par un numéro (ce numéro est appelé clé).

// Attention ! Un array numéroté commence toujours à la case n° 0 

// 1.1 Construire un tableau numéroté

// 1.1.1 - La fonction array permet de créer un array

$prenoms = array('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');

// 1.2.2 - créer manuellement le tableau case par case

$prenoms[0] = 'François';
$prenoms[1] = 'Michel';
$prenoms[2] = 'Nicole';

// PHP le sélectionner automatiquement en laissant les crochets vides

$prenoms[] = 'François'; // Créera $prenoms[0]
$prenoms[] = 'Michel'; // Créera $prenoms[1]
$prenoms[] = 'Nicole'; // Créera $prenoms[2]

// 1.2 - Afficher un tableau numéroté

echo $prenoms[1]; // Affiche-moi le contenu de la case n° 1 de $prenoms

// 2. Les tableaux associatifs

// - au lieu de numéroter les cases, on va les étiqueter en leur donnant à chacune un nom différent

// 2.1 Crée un tableau associatif

// 2.1.1 On crée notre array $coordonnees

$coordonnees = array(
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille' // « ville » associée à « Marseille ».
);

// 2.1.2 - créer le tableau case par case

$coordonnees['prenom'] = 'François';
$coordonnees['nom'] = 'Dupont';
$coordonnees['adresse'] = '3 Rue du Paradis';
$coordonnees['ville'] = 'Marseille';

// 2.2 Afficher un tableau associatif

echo $coordonnees['ville']; // Ce code affiche : « Marseille ».

// 3. Parcourir un tableau

// Nous allons voir trois moyens d'explorer un array : la boucle for  ; la boucle foreach ; la fonction print_r  (utilisée principalement pour le débogage).

// 3.1 La boucle for

// On crée notre array $prenoms
$prenoms = array('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');

// Puis on fait une boucle pour tout afficher :
for ($numero = 0; $numero < 5; $numero++) {
    echo $prenoms[$numero] . '<br />'; // affichera $prenoms[0], $prenoms[1] etc.
}

// 3.2 La boucle foreach

// elle va mettre la valeur de cette ligne dans une variable temporaire (par exemple $element)

$prenoms = array('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');

foreach ($prenoms as $element) { // on ne récupère que la valeur
    echo $element . '<br />'; // affichera $prenoms[0], $prenoms[1] etc.
}

// L'avantage de foreach  est qu'il permet aussi de parcourir les tableaux associatifs.

$coordonnees = array(
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille'
);

foreach ($coordonnees as $element) { // on ne récupère que la valeur
    echo $element . '<br />';
}

// on peut aussi récupérer la clé de l'élément:  foreach($coordonnees as $cle => $element)

$coordonnees = array(
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille'
);

foreach ($coordonnees as $cle => $element) {
    echo '[' . $cle . '] vaut ' . $element . '<br />';
}

// 3.3 Afficher rapidement un array avec print_r
// - la fonction  print_r  c'est une sorte de  echo  spécialisé dans les  arrays.
// - elle ne renvoie pas de code HTML comme <br />  pour les retours à la ligne

$coordonnees = array(   // s'en servir pour le débogage
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille'
);

echo '<pre>';
print_r($coordonnees);
echo '</pre>';

// 4. Rechercher dans un tableau
// - trois types de recherches: - array_key_exists : pour vérifier si une clé existe dans l'array ;
//                              - in_array : pour vérifier si une valeur existe dans l'array ;
//                              - array_search : pour récupérer la clé d'une valeur dans l'array.

// 4.1 Vérifier si une clé existe dans l'array : array_key_exists
//  array_key_exists('cle', $array);

$coordonnees = array(
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille'
);

if (array_key_exists('nom', $coordonnees)) {
    echo 'La clé "nom" se trouve dans les coordonnées !';
}

if (array_key_exists('pays', $coordonnees)) {
    echo 'La clé "pays" se trouve dans les coordonnées !';
}

// 4.2 Vérifier si une valeur existe dans l'array : in_array

$fruits = array('Banane', 'Pomme', 'Poire', 'Cerise', 'Fraise', 'Framboise');

if (in_array('Myrtille', $fruits)) {
    echo 'La valeur "Myrtille" se trouve dans les fruits !';
}

if (in_array('Cerise', $fruits)) {
    echo 'La valeur "Cerise" se trouve dans les fruits !';
}

// 4.3 Récupérer la clé d'une valeur dans l'array : array_search

// si elle a trouvé la valeur, array_search  renvoie la clé correspondante (c'est-à-dire le numéro si c'est un array numéroté, ou le nom de la clé si c'est un array associatif) 
// si elle n'a pas trouvé la valeur, array_search  renvoiefalse

$fruits = array('Banane', 'Pomme', 'Poire', 'Cerise', 'Fraise', 'Framboise');

$position = array_search('Fraise', $fruits);
echo '"Fraise" se trouve en position ' . $position . '<br />';

$position = array_search('Banane', $fruits);
echo '"Banane" se trouve en position ' . $position;
