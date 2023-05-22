<?php

/**
 * Boucle foreach sur l'ensemble des livres
 */

// Chargement des namespaces
use BiblioApp\BookController;

// Chargement des classes
require_once './classes/Controller/BookController.php';

// Boucle foreach
foreach (BookController::getAllBooks() as $book) : ?>

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $book['title'] ?></h5>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><?= $book['author'] ?></li>
            <li class="list-group-item"><?= $book['edition'] ?></li>
            <li class="list-group-item"><?= $book['category'] ?></li>
        </ul>
        <div class="card-body text-center">
            <button type="button" class="btn btn-primary rounded-5" data-bs-toggle="modal" data-bs-target="#book<?= $book['id'] ?>">
                Voir la fiche
            </button>
            <button type="button" class="btn btn-primary rounded-5" data-bs-toggle="modal" data-bs-target="#formBook<?= $book['id'] ?>">
                Réserver
            </button>
        </div>
    </div>

    <!-- Modal Vue -->
    <div class="modal fade" id="book<?= $book['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"><?= $book['title'] ?></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            Auteur : <?= $book['author'] ?>
                        </li>
                        <li class="list-group-item">
                            Édition : <?= $book['edition'] ?>
                        </li>
                        <li class="list-group-item">
                            ISBN : <?= $book['isbn'] ?>
                        </li>
                        <li class="list-group-item">
                            Catégorie : <?= $book['category'] ?>
                        </li>
                        <li class="list-group-item">
                            <?= $book['pages'] ?> pages
                        </li>
                        <li class="list-group-item">
                            Format : <?= $book['format'] ?>
                        </li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary rounded-5" data-bs-dismiss="modal">Fermer</button>
                    <a href="/admin.php" class="btn btn-primary rounded-5">Réservation</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Form -->
    <div class="modal fade" id="formBook<?= $book['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"><?= $book['title'] ?></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php include './templates/_form-addBooking.php' ?>
                </div>
            </div>
        </div>
    </div>

<?php endforeach; ?>