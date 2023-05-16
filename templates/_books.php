<?php

/**
 * Boucle foreach sur l'ensemble des livres
 */

// Chargement des namespaces
use BiblioApp\BookController;

// Chargement des classes
require_once './classes/Controller/BookController.php';

// Boucle foreach
foreach (array_slice(BookController::getAllBooks(), 0, 6) as $book) : ?>

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $book['title'] ?></h5>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><?= $book['author'] ?></li>
            <li class="list-group-item"><?= $book['edition'] ?></li>
            <li class="list-group-item"><?= $book['category'] ?></li>
        </ul>
        <div class="card-body">
            <a href="#" class="card-link">Voir la fiche</a>
            <a href="#" class="card-link">Réserver</a>
        </div>
    </div>

<?php endforeach; ?>