<?php 
/**
 * Page d'accueil de l'application
 */

// Chargement des namespaces
use BiblioApp\Book;
use BiblioApp\Database;

// Chargement des classes
require_once './classes/Entity/Book.php';
require_once './config/Database.php';


// Inclusion de l'entête
include_once './templates/_header.php';

$petitPrince = new Book(
    'Le Petit Prince',
    'Antoine de Saint-Exupéry',
    'Gallimard',
    '9782070612758',
    'Jeunesse',
    96,
    'Poche'
);

var_dump($petitPrince);

$connexion = new Database();
$connexion->connect();

?>

<!--Contenu de la page -->



<!--Fin du contenu de la page -->

<?php

// Inclusion du footer
include_once './templates/_footer.php';