<?php
/**
 * Page de traitement des formulaires
 */

// Chargement des namespaces
use BiblioApp\Book;
use BiblioApp\BookController;
use BiblioApp\Booking;
use BiblioApp\BookingController;

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
    $booking = new Booking(
        $_POST['client'],
        $_POST['book'],
        $_POST['dateStart'],
        $_POST['dateEnd']
    );
    $persist = BookingController::addBooking($booking);
    // var_dump($booking);
}

// 