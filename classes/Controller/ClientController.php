<?php 
/**
 * Controller ClientController
 * 
 * Cette classe représente les actions lié aux clients
 * 
 * @package BiblioApp 
 * @subpackage ClientController
 */

namespace BiblioApp; // On indique que la classe Client est dans le namespace BiblioApp

// Import des namespaces nécessaires
use BiblioApp\Database;

// Import des classes nécessaires
require_once __DIR__ . '/../Entity/Client.php';
require_once __DIR__ . '/../../config/Database.php';


class ClientController extends Client
{
    /**
     * Méthode statique de récupération de tous les client
     * 
     * @return array
     */
    public static function getAllClients(): array
    {
        // On prépare la requête de sélection
        $query = Database::connect()->prepare('SELECT * FROM client ORDER BY firstname ASC');

        // On exécute la requête
        $query->execute();

        // On récupère les données
        $result = $query->fetchAll(\PDO::FETCH_ASSOC);

        // On retourne les données
        return $result;
    }

}