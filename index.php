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

?>

<!--Contenu de la page -->

<div class="p-5 text-center bg-body-tertiary rounded-3 m-4">
    <h1 class="text-body-emphasis">BiblioApp</h1>
    <p class="col-lg-8 mx-auto fs-5 text-muted">
        L'application de gestion de bibliothèque
    </p>
    <div class="d-inline-flex gap-2 mb-5">
        <a href="#books" class="d-inline-flex align-items-center btn btn-primary btn-lg px-4 rounded-pill" type="button">
            Voir les livres
        </a>
        <a href="#" class="btn btn-outline-secondary btn-lg px-4 rounded-pill" type="button">
            Les réservations
        </a>
    </div>
</div>

<div id="books" class="row gap-3 d-flex justify-content-center">
    <h2>Les livres de la bibliothèque</h2>
    <?php include_once './templates/_books.php'; ?>
</div>

<!--Fin du contenu de la page -->

<?php
// Inclusion du footer
include_once './templates/_footer.php';


/**
 * TODO : Améliorer l'UI
 * TODO : Créer un formulaire d'ajout de livre
 * TODO : Afficher les réservations
 * TODO : Créer un formulaire de réservation
 */