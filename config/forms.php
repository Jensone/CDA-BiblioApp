<?php
/**
 * Page de traitement des formulaires
 */

// Chargement des namespaces
use BiblioApp\Book;
use BiblioApp\BookController;
use BiblioApp\Booking;
use BiblioApp\BookingController;
use BiblioApp\Database;

// Chargement des classes
require_once __DIR__ . '../../classes/Entity/Book.php';
require_once __DIR__ . '../../classes/Controller/BookController.php';
require_once __DIR__ . '../../classes/Entity/Booking.php';
require_once __DIR__ . '../../classes/Controller/BookingController.php';

// Traitement du formulaire d'ajout d'un livre
if (isset($_POST['addBook'])) {
    $book = new Book(
        $_POST['title'],
        $_POST['author'],
        $_POST['edition'],
        $_POST['isbn'],
        $_POST['category'],
        $_POST['pages'],
        $_POST['format']
    );
    $persist = BookController::addBook($book);
}

// Traitement du formulaire d'ajout d'une réservation
if (isset($_POST['addBooking'])) {

    // Transforme la valeur des champs en entiers (int)
    $client = intval($_POST['client']);
    $book = intval($_POST['book']);

    $booking = new Booking(
        $_POST['client'],
        $_POST['book'],
        $_POST['dateStart'],
        $_POST['dateEnd']
    );
    $persist = BookingController::addBooking($booking);
}

// Modification d'un livre
if (isset($_POST['editBook'])) {
    $book = new Book(
        $_POST['title'],
        $_POST['author'],
        $_POST['edition'],
        $_POST['isbn'],
        $_POST['category'],
        $_POST['pages'],
        $_POST['format']
    );
    // Cette fois-ci, on récupère l'id du livre à modifier
    // $persist = BookController::editBook($book, $_POST['id']);

    function editBook()
    {
        // Traduction de la requête SQL : "Mets à jour les données de la table books en fonction des valeurs de :title, :author, etc. là où l'id est égal à :id"
        $query = Database::connect()->prepare("
            UPDATE book SET title = :title, 
            author = :author, 
            edition = :edition, 
            isbn = :isbn, 
            category = :category, 
            pages = :pages, 
            format = :format 
            WHERE id = :id"
        ); 

        // BindParam des valeurs
        $query->bindParam(':id', $_POST['id'], PDO::PARAM_INT);
        $query->bindParam(':title', $_POST['title'], PDO::PARAM_STR);
        $query->bindParam(':author', $_POST['author'], PDO::PARAM_STR);
        $query->bindParam(':edition', $_POST['edition'], PDO::PARAM_STR);
        $query->bindParam(':isbn', $_POST['isbn'], PDO::PARAM_STR);
        $query->bindParam(':category', $_POST['category'], PDO::PARAM_STR);
        $query->bindParam(':pages', $_POST['pages'], PDO::PARAM_INT);
        $query->bindParam(':format', $_POST['format'], PDO::PARAM_STR);

        // Exécution de la requête
        $result = $query->execute();

        var_dump($result);
        // Redirection vers la page d'accueil
        // header('Location: /index.php');

    }

    editBook();

}