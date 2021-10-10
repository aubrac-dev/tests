<?php
// Les conditions

// La structure de base : if… else

$age = 8;

if ($age <= 12) // SI l'âge est inférieur ou égal à 12
{
    echo "Salut gamin ! Bienvenue sur mon site !<br />";
    $autorisation_entrer = "Oui";
} else // SINON
{
    echo "Ceci est un site pour enfants, vous êtes trop vieux pour pouvoir  entrer. Au revoir !<br />";
    $autorisation_entrer = "Non";
}

echo "Avez-vous l'autorisation d'entrer ? La réponse est : $autorisation_entrer";

// complet

$autorisation_entrer = "Oui";

if ($autorisation_entrer == "Oui") // SI on a l'autorisation d'entrer
{
    // instructions à exécuter quand on est autorisé à entrer
} elseif ($autorisation_entrer == "Non") // SINON SI on n'a pas l'autorisation d'entrer
{
    // instructions à exécuter quand on n'est pas autorisé à entrer
} else // SINON (la variable ne contient ni Oui ni Non, on ne peut pas agir)
{
    echo "Euh, je ne connais pas ton âge, tu peux me le rappeler s'il te plaît ?";
}

// Pour vérifier si la variable est vide, vous pouvez taper :  if ($variable == NULL)

//  Voici comment on teste une variable booléenne :

$autorisation_entrer = true;

if ($autorisation_entrer == true) {
    echo "Bienvenue petit nouveau. :o)";
} elseif ($autorisation_entrer == false) {
    echo "T'as pas le droit d'entrer !";
}

// n'êtes pas obligés d'ajouter le== true

$autorisation_entrer = true;

if ($autorisation_entrer) {
    echo "Bienvenue petit nouveau. :o)";
} else {
    echo "T'as pas le droit d'entrer !";
}

// faux test

$autorisation_entrer = true;

if (!$autorisation_entrer) {
    // faux
}

// Des conditions multiples: AND && et OR ||

// AND &&

$age = 8;
$langue = "anglais";


if ($age <= 12 and $langue == "français") {
    echo "Bienvenue sur mon site !";
} elseif ($age <= 12 and $langue == "anglais") {
    echo "Welcome to my website!";
}

// OR ||

$pays = "France";

if ($pays == "France" or $pays == "Belgique") {
    echo "Bienvenue sur notre site !";
} else {
    echo "Désolés, notre service n'est pas encore disponible dans votre pays !";
}

// astuce

$variable = 23;

if ($variable == 23) { // ferme php - suivi code html
?>
    <strong>Bravo !</strong> Vous avez trouvé le nombre mystère !
<?php  // re-ouvre php
}

// switch

$note = 16;

if ($note == 0) // c'est lourd, long, et répétitif
{
    echo "Tu es vraiment un gros nul !!!";
} elseif ($note == 5) {
    echo "Tu es très mauvais";
} elseif ($note == 7) {
    echo "Tu es mauvais";
} elseif ($note == 10) {
    echo "Tu as pile poil la moyenne, c'est un peu juste…";
} elseif ($note == 12) {
    echo "Tu es assez bon";
} elseif ($note == 16) {
    echo "Tu te débrouilles très bien !";
} elseif ($note == 20) {
    echo "Excellent travail, c'est parfait !";
} else {
    echo "Désolé, je n'ai pas de message à afficher pour cette note";
}

// avec switch

$note = 10; // En clair, le switch  ne peut tester que l'égalité

switch ($note) // on indique sur quelle variable on travaille
{
    case 0: // dans le cas où $note vaut 0
        echo "Tu es vraiment un gros nul !!!";
        break;

    case 5: // dans le cas où $note vaut 5
        echo "Tu es très mauvais";
        break;

    case 7: // dans le cas où $note vaut 7
        echo "Tu es mauvais";
        break;

    case 10: // etc. etc.
        echo "Tu as pile poil la moyenne, c'est un peu juste…";
        break;

    case 12:
        echo "Tu es assez bon";
        break;

    case 16:
        echo "Tu te débrouilles très bien !";
        break;

    case 20:
        echo "Excellent travail, c'est parfait !";
        break;

    default:
        echo "Désolé, je n'ai pas de message à afficher pour cette note";
}

// Les ternaires : des conditions condensées

$age = 24;

if ($age >= 18) {
    $majeur = true;
} else {
    $majeur = false;
}

// On peut faire la même chose en une seule ligne grâce à une structure ternaire :

$age = 24;

$majeur = ($age >= 18) ? true : false;
