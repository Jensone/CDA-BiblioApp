<?php

/**
 * Controller BookingController
 * 
 * Cette classe représente les actions lié à une réservation
 * 
 * @package BiblioApp 
 * @subpackage BookingController
 */

namespace BiblioApp; // On indique que la classe Booking est dans le namespace BiblioApp

// Import des namespaces nécessaires
use BiblioApp\Database;

// Import des classes nécessaires
require_once __DIR__ . '/../Entity/Booking.php';
require_once __DIR__ . '/../../config/Database.php';

class BookingController extends Booking
{
    /**
     * Récupération de toutes les réservations avec les noms et prénoms des clients
     * 
     * @return array
     */
    public static function getAllBookings()
    {
        // On se connecte à la bdd
        $pdo = Database::connect();

        // On prépare la requête de sélection
        $query = $pdo->prepare('
            SELECT booking.id, booking.dateStart, booking.dateEnd, client.firstname, client.lastname, book.title
            FROM booking
            JOIN client ON booking.client = client.id
            JOIN book ON booking.book = book.id
            ORDER BY booking.dateStart DESC;
            ');

        // On exécute la requête
        $query->execute();

        // On récupère les données
        $result = $query->fetchAll(\PDO::FETCH_ASSOC);

        // On retourne les données
        return $result;
    }

    /**
     * Ajout d'une réservation de livre
     * 
     * @param int $book
     * @return void
     */
    public static function addBooking()
    {
        // Connexion à la bdd et préparation de la requête
        $query = Database::connect()->prepare("
            INSERT INTO booking (client, book, dateStart, dateEnd)
            VALUES (:client, :book, :dateStart, :dateEnd"
        );

        // Bind des paramètres de la requête
        // (association des paramètres de la requête avec les données)
        $query->bindParam(':client', $_POST['client'], \PDO::PARAM_INT);
        $query->bindParam(':book', $_POST['book'], \PDO::PARAM_INT);
        $query->bindParam(':dateStart', $_POST['dateStart'], \PDO::PARAM_STR);
        $query->bindParam(':dateEnd', $_POST['dateEnd'], \PDO::PARAM_STR);

        // Exécution de la requête
        $query->execute();

        // On redirige vers la page des réservations
        header('Location: /booking.php');

    }
}
