<?php
// Traiter les erreurs SQL

/*
1. Comment repérer une erreur SQL en PHP.

2. Comment faire parler PHP pour qu'il nous donne l'erreur SQL (de gré, ou de force !).

Repérer l'erreur SQL en PHP
Lorsqu'il s'est produit une erreur SQL, la page affiche le plus souvent l'erreur suivante :

Fatal error: Call to a member function fetch() on a non-object

Cette erreur survient lorsque vous voulez afficher les résultats de votre requête, 
généralement dans la boucle  while ($donnees = $reponse->fetch())  .

Quand vous avez cette erreur, il ne faut pas chercher plus loin, c'est la requête SQL qui précède
 qui n'a pas fonctionné. Il vous manque cependant des détails sur ce qui a posé problème dans la requête.
 Nous allons maintenant voir comment on peut remédier à cela.
*/

// Repérez la requête qui selon vous plante (certainement celle juste avant la boucle  while  ),
// et demandez d'afficher l'erreur s'il y en a une, comme ceci :

$reponse = $bdd->query('SELECT nom FROM jeux_video') or die(print_r($bdd->errorInfo()));

// En général, MySQL vous dit « You have an error in your SQL syntax near 'XXX' ». 
// À vous de bien relire votre requête SQL ; l'erreur se trouve généralement près de l'endroit où on vous l'indique.