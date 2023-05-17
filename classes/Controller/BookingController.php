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
require_once 'classes/Entity/Booking.php';
require_once '././config/Database.php';

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
}
