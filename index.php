<?php

/**
 * Page d'accueil de l'application
 */

// Chargement des namespaces
use BiblioApp\BookController;

// Chargement des classes
require_once './classes/Controller/BookController.php';


// Inclusion de l'entête
include_once './templates/_header.php';

?>

<!--Contenu de la page -->

<div class="p-5 text-center bg-body-tertiary rounded-3 m-4 bg-svg">
    <h1 class="text-body-emphasis">BiblioApp</h1>
    <p class="col-lg-8 mx-auto fs-5 text-muted">
        L'application de gestion de bibliothèque
    </p>
    <div class="d-inline-flex gap-2 mb-5">
        <a href="/books.php" class="d-inline-flex align-items-center btn btn-primary btn-lg px-4 rounded-pill" type="button">
            Voir les livres
        </a>
        <a href="/booking.php" class="btn btn-outline-secondary btn-lg px-4 rounded-pill" type="button">
            Les réservations
        </a>
    </div>
</div>

<div id="books" class="row gap-3 d-flex justify-content-center mb-5">
    <h2 class="text-center pt-3 pb-3">Les dernières entrées</h2>

    <?php foreach (array_slice(BookController::getAllBooks(), 0, 8) as $book) : ?>

        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?= $book['title'] ?></h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><?= $book['author'] ?></li>
                <li class="list-group-item"><?= $book['edition'] ?></li>
                <li class="list-group-item"><?= $book['category'] ?></li>
            </ul>
        </div>

    <?php endforeach; ?>

</div>

<!--Fin du contenu de la page -->

<?php
// Inclusion du footer
include_once './templates/_footer.php';
