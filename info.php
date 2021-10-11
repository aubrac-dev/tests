<?php
// Les erreurs les plus courantes

// 1. Parse error

// Parse error: parse error in fichier.php on line 15

// -  pensez donc à regarder autour de la ligne indiquée.

//  Il peut y avoir plusieurs causes :

// 1.1 Vous avez oublié le point-virgule à la fin de l'instruction.

$id_news = 5;   // $id_news = 5

// 1.2 Vous avez oublié de fermer un guillemet (ou une apostrophe, ou une parenthèse)

echo "Bonjour !";   // echo "Bonjour !;

// 1.3 Vous vous êtes trompé dans la concaténation, vous avez peut-être oublié un point :

$age = 22;
echo "J'ai " . $age . " ans"; // echo "J'ai " . $age  " ans";

// 1.4 Il peut aussi s'agir d'une accolade mal fermée (pour un if  , par exemple).

// 1.5 Undefined function - la fonction inconnue. 

/*
Fatal Error: Call to undefined function: fonction_inconnue() in fichier.php on line 27

Deux possibilités :
    - soit la fonction n'existe vraiment pas. Vous avez probablement fait une faute de frappe, 
    vérifiez si une fonction à l'orthographe similaire existe ;
    - soit la fonction existe vraiment, mais PHP ne la reconnaît pas.
     C'est parce que cette fonction se trouve dans une extension de PHP que vous n'avez pas activée

     Une dernière chose : il se peut aussi que vous essayiez d'utiliser une fonction qui n'est pas disponible 
     dans la version de PHP que vous avez.
*/

// 1.6 Wrong parameter count

// Warning: Wrong parameter count for fonction() in fichier.php on line 112

// Cela signifie que vous avez oublié des paramètres pour la fonction, ou même que vous en avez trop mis.


// 2. Quelques erreurs plus rares

// 2.1 Headers already sent by…

// Cannot modify header information - headers already sent by ...

// header(), session_start()  et de setcookie()

//  chacune de ces fonctions doit être utilisée au tout début de votre code PHP. 
// Il ne faut RIEN mettre avant, sinon ça provoquera l'erreur « Headers already sent by… ».

/*
OK: <?php session_start(); ?>
    <html>

FAUX:   <html>
        <?php session_start(); ?>
*/

// 2.2 L'image contient des erreurs

/*
Ce message survient lorsque vous travaillez avec la bibliothèque GD. 
Si vous avez fait une erreur dans votre code (par exemple une banale « parse error »), 
cette erreur sera inscrite dans l'image. Du coup, l'image ne sera pas valide et le navigateur
 ne pourra pas l'afficher.

 Bon, d'accord, l'erreur est dans l'image. Mais comment faire pour faire « apparaître » l'erreur ?

Deux possibilités :

vous pouvez supprimer la ligne suivante dans votre code :

<?php header ("Content-type: image/png"); ?>

L'erreur apparaîtra à la place du message « L'image contient des erreurs » ;

vous pouvez aussi afficher le code source de l'image (comme si vous alliez regarder la source HTML 
de la page, sauf que là, il s'agit d'une image).

Dans les deux cas, vous verrez le message d'erreur apparaître. 
À partir de là, il ne vous restera plus qu'à corriger le bug !
*/

// 2.3 Maximum execution time exceeded

// Ça, c'est le genre d'erreur qui arrive le plus souvent à cause d'une boucle infinie :

/*
$nombre = 5;
while ($nombre == 5)
{
    echo 'Zéro ';
}
*/
