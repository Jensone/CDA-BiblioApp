<?php 
/**
 * Page d'accueil de l'application
 */

// Chargement des namespaces
use BiblioApp\Book;
use BiblioApp\BookController;

// Chargement des classes
require_once './classes/Entity/Book.php';
require_once './classes/Controller/BookController.php';


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

BookController::getAllBooks();

?>

<!--Contenu de la page -->



<!--Fin du contenu de la page -->

<?php

// Inclusion du footer
include_once './templates/_footer.php';