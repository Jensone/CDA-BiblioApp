<?php 

class Book {
    // Propriétés (variables, attributs)
    private $id;
    public $title;
    public $description;
    public $author;
    public $edition;
    public $isbn;
    public $category;
    public $page;
    public $format;

    // TODO : Constructeur

    // TODO : Méthodes (fonctions)

    /**
     * Getters (accesseurs)
     */
    public function getid(): int
    {
        return $this->id;
    }
    public function gettitle(): string
    {
        return $this->title;
    }
    public function getdescription(): string
    {
        return $this->description;
    }
    public function getauthor(): string
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
    public function getPage(): int
    {
        return $this->page;
    }
    public function getFormat(): string
    {
        return $this->format;
    }

    // Setters (mutateurs)
    public function setId($id): void
    {
        $this->id = $id;
    }
    public function setTitle($title): void
    {
        $this->title = $title;
    }
    public function setDescription($description): void
    {
        $this->description = $description;
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
    public function setPage($page): void
    {
        $this->page = $page;
    }
    public function setFormat($format): void
    {
        $this->format = $format;
    }

    
} // Fin de la classe Book