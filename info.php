<?php
// Afficher et concaténer des variables

$age_du_visiteur = 17;
echo $age_du_visiteur;

// La concaténation

// M1 - écrire trois instructions echo

$age_du_visiteur = 17;
echo "Le visiteur a ";
echo $age_du_visiteur;
echo " ans";

// M2.1 - Concaténer avec des guillemets doubles

$age_du_visiteur = 17;
echo "Le visiteur a $age_du_visiteur ans";

// M2.2 - Concaténer avec des guillemets simples

$age_du_visiteur = 17;
echo 'Le visiteur a ' . $age_du_visiteur . ' ans'; //cette méthode qu'utilisent la plupart des programmeurs expérimentés en PHP
