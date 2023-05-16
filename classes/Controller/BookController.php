<?php 
/**
 * Controller BookController
 * 
 * Cette classe représente les actions lié à un livre
 * 
 * @package BiblioApp 
 * @subpackage BookController
 */

namespace BiblioApp; // On indique que la classe Book est dans le namespace BiblioApp

use BiblioApp\Database;

// Import des classes nécessaires
require_once 'classes/Entity/Book.php';
require_once '././config/Database.php';

class BookController extends Book
{
    public static function getAllBooks()
    {
        $pdo = Database::connect();
        $query = $pdo->prepare('SELECT * FROM book');
        $query->execute();
        $result = $query->fetchAll(\PDO::FETCH_ASSOC);
        var_dump($result);
    }
}