<?php

// Transmettez des données avec les formulaires

// 1. Créer la base du formulaire

/*
<form method="post" action="cible.php">
 
<p>
    On insèrera ici les éléments de notre formulaire.
</p>
 
</form>
*/

// 1.1 La méthode

// 1.1.1 method="get"
/*
 les données transiteront par l'URL, comme on l'a appris précédemment. 
 On pourra les récupérer grâce à l'array $_GET  .
  Cette méthode est assez peu utilisée car on ne peut pas envoyer beaucoup d'informations dans l'URL 
  (je vous disais dans le chapitre précédent qu'il était préférable de ne pas dépasser 256 caractères).
*/

// 1.1.2 method="post"

/*
les données ne transiteront pas par l'URL, l'utilisateur ne les verra donc pas passer dans la barre d'adresse.
Cette méthode permet d'envoyer autant de données que l'on veut, ce qui fait qu'on la privilégie le plus souvent.
 Néanmoins, les données ne sont pas plus sécurisées qu'avec la méthode GET  , 
 et il faudra toujours vérifier si tous les paramètres sont bien présents et valides, 
 comme on l'a fait dans le chapitre précédent. On ne doit pas plus faire confiance aux formulaires qu'aux URL.
*/

// 1.2 La cible - L'attribut action  sert à définir la page appelée par le formulaire.

/*
Dans cible.php  , on a affiché une variable $_POST['prenom']  qui contient ce que l'utilisateur a entré 
dans le formulaire.
*/

// Pour échapper le code HTML, il suffit d'utiliser la fonction htmlspecialchars  qui va transformer 
// les chevrons des balises HTML <>  en &lt;  et &gt;  respectivement. Cela provoquera 
// l'affichage de la balise plutôt que son exécution.

// echo htmlspecialchars($_POST['prenom']);

// 2. L'envoi de fichiers

// Le formulaire d'envoi de fichier

/*
<form action="cible_envoi.php" method="post" enctype="multipart/form-data">
    <p>Formulaire d'envoi de fichier</p>
</form>

-----------

<form action="cible_envoi.php" method="post" enctype="multipart/form-data">
        <p>
                Formulaire d'envoi de fichier :<br />
                <input type="file" name="monfichier" /><br />
                <input type="submit" value="Envoyer le fichier" />
        </p>
</form>
*/


// 1/ Tester si le fichier a bien été envoyé

/*
<?php
// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)
{
 
}
?>
*/

// 2/ Vérifier la taille du fichier

/*
<?php
// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)
{
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['monfichier']['size'] <= 1000000)
        {
 
        }
}
?>
*/

// 3/ Vérifier l'extension du fichier

/*
<?php
$infosfichier = pathinfo($_FILES['monfichier']['name']);
$extension_upload = $infosfichier['extension'];
?>
*/

// Final

/*
<?php
// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)
{
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['monfichier']['size'] <= 1000000)
        {
                // Testons si l'extension est autorisée
                $infosfichier = pathinfo($_FILES['monfichier']['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
                if (in_array($extension_upload, $extensions_autorisees))
                {
                
                }
        }
}
?>
*/

// 4/ Valider l'upload du fichier

/*
<?php
// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)
{
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['monfichier']['size'] <= 1000000)
        {
                // Testons si l'extension est autorisée
                $infosfichier = pathinfo($_FILES['monfichier']['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
                if (in_array($extension_upload, $extensions_autorisees))
                {
                        // On peut valider le fichier et le stocker définitivement
                        move_uploaded_file($_FILES['monfichier']['tmp_name'], 'uploads/' . basename($_FILES['monfichier']['name']));
                        echo "L'envoi a bien été effectué !";
                }
        }
}
?>
*/
