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

// Import des namespaces nécessaires
use PDO;
use BiblioApp\Database;

// Import des classes nécessaires
require_once __DIR__ . '/../Entity/Book.php';
require_once __DIR__ . '/../../config/Database.php';

class BookController extends Book
{
    /**
     * Méthode statique de récupération de l'id et le titre des livres
     */
    public static function getBooksIdAndTitle(): array
    {
        // On se connecte à la bdd
        $pdo = Database::connect();

        // On prépare la requête de sélection
        $query = $pdo->prepare('SELECT id, title FROM book ORDER BY id DESC');

        // On exécute la requête
        $query->execute();

        // On récupère les données
        $result = $query->fetchAll(\PDO::FETCH_ASSOC);

        // On retourne les données
        return $result;
    }
    /**
     * Méthode statique de récupération de tous les livres
     * 
     * @return array
     */
    public static function getAllBooks(): array
    {
        // On se connecte à la bdd
        $pdo = Database::connect();

        // On prépare la requête de sélection
        $query = $pdo->prepare('SELECT * FROM book ORDER BY id DESC');

        // On exécute la requête
        $query->execute();

        // On récupère les données
        $result = $query->fetchAll(\PDO::FETCH_ASSOC);

        // On retourne les données
        return $result;
    }

    /**
     * Méthode statique de récupération d'un livre
     * 
     * @return array
     */
    public static function getOneBook($id): array
    {
        // On se connecte à la bdd
        $pdo = Database::connect();

        // On prépare la requête de sélection
        $query = $pdo->prepare("SELECT * FROM book WHERE id = $id");

        // On exécute la requête
        $query->execute();

        // On récupère les données
        $result = $query->fetch(\PDO::FETCH_ASSOC);

        // On retourne les données
        return $result;
    }

    /**
     *  Méthode staique d'ajout d'un livre
     * 
     * @return void
     */
    public static function addBook(): void
    {
        // On se connecte à la bdd
        $pdo = Database::connect();

        // On prépare la requête d'insertion
        $query = $pdo->prepare(
            'INSERT INTO book ( title,  author,  edition, isbn,  category, pages, format
                ) VALUES ( :title, :author, :edition, :isbn, :category, :pages, :format)');
        
        // On fait matcher les valeurs du formulaire avec les paramètres de la requête
        $query->bindValue(':title', $_POST['title'], \PDO::PARAM_STR);
        $query->bindValue(':author', $_POST['author'], \PDO::PARAM_STR);
        $query->bindValue(':edition', $_POST['edition'], \PDO::PARAM_STR);
        $query->bindValue(':isbn', $_POST['isbn'], \PDO::PARAM_STR);
        $query->bindValue(':category', $_POST['category'], \PDO::PARAM_STR);
        $query->bindValue(':pages', $_POST['pages'], \PDO::PARAM_INT);
        $query->bindValue(':format', $_POST['format'], \PDO::PARAM_STR);
        
        // On exécute la requête
        $query->execute();

        // On redirige vers la page des livres
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }

    /** 
     * Méthode static pour suppreimer d'un livre
     * 
     * @param int $id
     * @return void
     */
    public static function deleteBook($id)
    {
        // On se connecte à la bdd
        $pdo = Database::connect();

        // On prépare la requête de suppression
        $query = $pdo->prepare('DELETE FROM book WHERE id = :id');

        // On fait matcher les valeurs du formulaire avec les paramètres de la requête
        $query->bindValue(':id', $id, \PDO::PARAM_INT);

        // On exécute la requête
        $query->execute();

        // On redirige vers la page des livres
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }

    public static function editBook()
    {
        // Traduction de la requête SQL : "Mets à jour les données de la table books en fonction des valeurs de :title, :author, etc. là où l'id est égal à :id"
        $query = Database::connect()->prepare("
            UPDATE book SET title = :title, author = :author, edition = :edition, 
            isbn = :isbn, category = :category, pages = :pages, format = :format 
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
        $query->execute();

        header("Location: " . $_SERVER["HTTP_REFERER"]);

    }
}