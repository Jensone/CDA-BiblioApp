<?php

/**
 * Page des gestion des livre (CRUD)
 * C: Create (Ajouter) > BookController::addBook() ✅
 * R: Read (Lire) > BookController::getAllBooks() ✅ / BookController::getOneBook() 🛑
 * U: Update (Modifier) > BookController::updateBook() 🛑
 * D: Delete (Supprimer) > BookController::deleteBook() ✅
 */

 use BiblioApp\Book;
 use BiblioApp\BookController;

// Chargement des fichiers nécessaires
include_once './classes/Entity/Book.php';
include_once './classes/Controller/BookController.php';

// Inclusion de l'en-tête
include_once './templates/_header.php';

// Traitement du formulaire d'ajout d'un livre
if(isset($_POST['addBook'])) { // Si le formulaire a été soumis
    $book = new Book( // On instancie un nouveau livre
        // On récupère les données du formulaire avec $_POST et on les passe en paramètres du constructeur
        $_POST['title'],
        $_POST['author'],
        $_POST['edition'],
        $_POST['isbn'],
        $_POST['category'],
        $_POST['pages'],
        $_POST['format']
    );
    // On appelle la méthode statique addBook() de la classe BookController en lui passant le livre en paramètre
    $persist = BookController::addBook($book);
}
?>

<div class="row">
    <div class="col-12">
        <h1 class="text-center">Gestion des livres</h1>
    </div>

    <ul class="nav nav-tabs" id="myTab" role="tablist">
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
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="addBook-tab-pane" role="tabpanel" aria-labelledby="addBook-tab" tabindex="0">
            <div class="col-6">
                <h3 class="m-4">Formulaire d'ajout d'un livre</h3>
                <!-- Inclusion du formulaire d'ajout d'un livre -->
                <?php include_once './templates/_form-add.php' ?>
            </div>
        </div>
        <div class="tab-pane fade" id="updateBook-tab-pane" role="tabpanel" aria-labelledby="updateBook-tab" tabindex="0">
            <div class="col-6">
                <h3 class="m-4">Formulaire de modification d'un livre</h3>
                <!-- Inclusion du formulaire de modification d'un livre -->
                <?php include_once './templates/_form-edit.php' ?>
            </div>
        <div class="tab-pane fade" id="addBooking-tab-pane" role="tabpanel" aria-labelledby="addBooking-tab" tabindex="0">
            <div class="col-6">
                <h3 class="m-4">Formulaire de création d'une réservation</h3>
                <!-- Inclusion du formulaire de création d'une réservation -->
                <?php include_once './templates/_form-addBooking.php' ?>
            </div>
        </div>
    </div>
</div>


<?php

// Inclusion du footer
include_once './templates/_footer.php';