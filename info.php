<?php

// 1. Transmettez des données avec l'URL

// http://www.monsite.com/bonjour.php?nom=Dupont&prenom=Jean

// <a href="bonjour.php?nom=Dupont&amp;prenom=Jean">Dis-moi bonjour !</a>

// 2. Récupérer les paramètres en PHP

// index.php -> bonjour.php

// 3. Ne faites jamais confiance aux données reçues !

// Tous les visiteurs peuvent trafiquer les URL

// Tester la présence d'un paramètre

/*
http://localhost/tests/bonjour.php

 On a essayé d'afficher la valeur de $_GET['prenom']  et celle de $_GET['nom']  ... 
 Mais comme on vient de les supprimer de l'URL, ces variables n'ont pas été créées, 
 et donc elles n'existent pas .

 PHP nous avertit qu'on essaie d'utiliser des variables qui n'existent pas, d'où les « Undefined index »
*/

// Cette fonction teste si une variable existe: isset()
