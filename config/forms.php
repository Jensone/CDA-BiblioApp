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
    $persist = BookController::editBook($book, $_POST['id']);
}

// Suppression d'un livre
if (isset($_GET['deleteBook'])) {
    $delete = BookController::deleteBook($_GET['deleteBook']);
}