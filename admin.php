<?php

/**
 * Page des gestion des livre (CRUD)
 * C: Create (Ajouter) > BookController::addBook() ✅ / BookController::addBooking() 🛑
 * R: Read (Lire) > BookController::getAllBooks() ✅ / BookController::getOneBook() 🛑
 * U: Update (Modifier) > BookController::updateBook() 🛑
 * D: Delete (Supprimer) > BookController::deleteBook() ✅
 */

// Inclusion de l'en-tête
include_once './templates/_header.php';

?>

<!--Contenu de la page -->

<div class="p-5 text-center bg-body-tertiary rounded-3 m-4 bg-svg">
    <h1 class="text-body-emphasis">Gestion de la bibliothèque</h1>
    <p class="col-lg-8 mx-auto fs-5 text-muted">
        Ajouter ou modifier un livre, créer une réservation
    </p>
</div>

<div class="row">
    <ul class="nav nav-tabs d-flex justify-content-center" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="addBook-tab" data-bs-toggle="tab" data-bs-target="#addBook-tab-pane" type="button" role="tab" aria-controls="addBook-tab-pane" aria-selected="true">
                Ajouter un livre
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="updateBook-tab" data-bs-toggle="tab" data-bs-target="#updateBook-tab-pane" type="button" role="tab" aria-controls="updateBook-tab-pane" aria-selected="false">
                Modifier un livre
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="addBooking-tab" data-bs-toggle="tab" data-bs-target="#addBooking-tab-pane" type="button" role="tab" aria-controls="addBooking-tab-pane" aria-selected="false">
                Créer une réservation
            </button>
        </li>
    </ul>
    <div class="tab-content d-flex justify-content-center" id="myTabContent">
        <div class="tab-pane fade show active" id="addBook-tab-pane" role="tabpanel" aria-labelledby="addBook-tab" tabindex="0">
            <h3 class="m-4">Formulaire d'ajout d'un livre</h3>
            <!-- Inclusion du formulaire d'ajout d'un livre -->
            <?php include_once './templates/_form-add.php' ?>
        </div>
        <div class="tab-pane fade" id="updateBook-tab-pane" role="tabpanel" aria-labelledby="updateBook-tab" tabindex="0">
            <h3 class="m-4">Formulaire de modification d'un livre</h3>
            <!-- Inclusion du formulaire de modification d'un livre -->
            <?php include_once './templates/_form-edit.php' ?>
        </div>
        <div class="tab-pane fade" id="addBooking-tab-pane" role="tabpanel" aria-labelledby="addBooking-tab" tabindex="0">
            <h3 class="m-4">Formulaire de création d'une réservation</h3>
            <!-- Inclusion du formulaire de création d'une réservation -->
            <?php include_once './templates/_form-addBooking.php' ?>
        </div>
    </div>
</div>

<!--Fin du contenu de la page -->

<?php
// Inclusion du footer
include_once './templates/_footer.php';
