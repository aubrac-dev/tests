<?php
// connexion à bdd

// modifier le prix et le nombre de joueurs pour le jeu Battlefield 1942
$bdd->exec('UPDATE jeux_video SET prix = 10, nbre_joueurs_max = 32 WHERE nom = \'Battlefield 1942\'');

// remplace Florent avec Michel
$nb_modifs = $bdd->exec('UPDATE jeux_video SET possesseur = \'Florent\' WHERE possesseur = \'Michel\'');
echo $nb_modifs . ' entrées ont été modifiées !';

// Avec une requête préparée
$req = $bdd->prepare('UPDATE jeux_video SET prix = :nvprix, nbre_joueurs_max = :nv_nb_joueurs WHERE nom = :nom_jeu');
$req->execute(array(
	'nvprix' => $nvprix,
	'nv_nb_joueurs' => $nv_nb_joueurs,
	'nom_jeu' => $nom_jeu
	));
