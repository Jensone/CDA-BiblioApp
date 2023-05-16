<?php 
/**
 * Classe Book
 * 
 * Cette classe représente un livre
 * 
 * @package BiblioApp 
 * @subpackage Book
 */

namespace BiblioApp; // On indique que la classe Book est dans le namespace BiblioApp

class Book
{
    // Propriétés (variables, attributs)
    private $id;
    private $title;
    private $author;
    private $edition;
    private $isbn;
    private $category;
    private $pages;
    private $format;

    // Constructeur (méthode magique)
    public function __construct(
        string $title,
        string $author,
        string $edition,
        string $isbn,
        string $category,
        int $pages,
        string $format
        )
    {
        $this->title = $title;
        $this->author = $author;
        $this->edition = $edition;
        $this->isbn = $isbn;
        $this->category = $category;
        $this->pages = $pages;
        $this->format = $format;

    }

    // TODO : Méthodes (fonctions)

    /**
     * Getters (accesseurs)
     */
    public function getId(): int
    {
        return $this->id;
    }
    public function getTitle(): string
    {
        return $this->title;
    }
    public function getAuthor(): string
    {
        return $this->author;
    }
    public function getEdition(): string
    {
        return $this->edition;
    }
    public function getIsbn(): string
    {
        return $this->isbn;
    }
    public function getCategory(): string
    {
        return $this->category;
    }
    public function getPages(): int
    {
        return $this->pages;
    }
    public function getFormat(): string
    {
        return $this->format;
    }

    /**
     * Setters (mutateurs)
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }
    public function setAuthor($author): void
    {
        $this->author = $author;
    }
    public function setEdition($edition): void
    {
        $this->edition = $edition;
    }
    public function setIsbn($isbn): void
    {
        $this->isbn = $isbn;
    }
    public function setCategory($category): void
    {
        $this->category = $category;
    }
    public function setPages($pages): void
    {
        $this->pages = $pages;
    }
    public function setFormat($format): void
    {
        $this->format = $format;
    }

} // Fin de la classe Book