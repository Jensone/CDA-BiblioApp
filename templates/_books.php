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
            <!-- SVG Œil -->
            <button type="button" class="btn btn-light border p-2" data-bs-toggle="modal" data-bs-target="#book<?= $book['id'] ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 576 512">
                    <path fill="#000000" d="M288 144a110.94 110.94 0 0 0-31.24 5a55.4 55.4 0 0 1 7.24 27a56 56 0 0 1-56 56a55.4 55.4 0 0 1-27-7.24A111.71 111.71 0 1 0 288 144zm284.52 97.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400c-98.65 0-189.09-55-237.93-144C98.91 167 189.34 112 288 112s189.09 55 237.93 144C477.1 345 386.66 400 288 400z" />
                </svg>
            </button>
            <!-- SVG Calendrier -->
            <button type="button" class="btn btn-light border p-2" data-bs-toggle="modal" data-bs-target="#formBook<?= $book['id'] ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 448 512">
                    <path fill="#000000" d="M148 288h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12zm108-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm96 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm-96 96v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm-96 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm192 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm96-260v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h48V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h128V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h48c26.5 0 48 21.5 48 48zm-48 346V160H48v298c0 3.3 2.7 6 6 6h340c3.3 0 6-2.7 6-6z" />
                </svg>
            </button>
            <!-- SVG Stylo -->
            <button type="button" class="btn btn-light border p-2" data-bs-toggle="modal" data-bs-target="#editBook<?= $book['id'] ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 576 512">
                    <path fill="#000000" d="m402.3 344.9l32-32c5-5 13.7-1.5 13.7 5.7V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h273.5c7.1 0 10.7 8.6 5.7 13.7l-32 32c-1.5 1.5-3.5 2.3-5.7 2.3H48v352h352V350.5c0-2.1.8-4.1 2.3-5.6zm156.6-201.8L296.3 405.7l-90.4 10c-26.2 2.9-48.5-19.2-45.6-45.6l10-90.4L432.9 17.1c22.9-22.9 59.9-22.9 82.7 0l43.2 43.2c22.9 22.9 22.9 60 .1 82.8zM460.1 174L402 115.9L216.2 301.8l-7.3 65.3l65.3-7.3L460.1 174zm64.8-79.7l-43.2-43.2c-4.1-4.1-10.8-4.1-14.8 0L436 82l58.1 58.1l30.9-30.9c4-4.2 4-10.8-.1-14.9z" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Modal Vue en cliquant sur l'icône d'œil -->
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
                    <a href="/config/forms.php?deleteBook=<?= $book['id'] ?>" class="btn btn-danger rounded-5">Supprimer</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Form en cliquant sur l'icône de calendrier -->
    <div class="modal fade" id="formBook<?= $book['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Réserver : <?= $book['title'] ?></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php include './templates/_form-addBooking.php' ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal EditForm en cliquant sur l'icône de stylo -->
    <div class="modal fade" id="editBook<?= $book['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modifier : <?= $book['title'] ?></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php include './templates/_form-edit.php' ?>
                </div>
            </div>
        </div>
    </div>

<?php endforeach; ?>