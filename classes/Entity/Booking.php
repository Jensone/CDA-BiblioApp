<?php
/**
 * Classe Booking
 * 
 * Cette classe représente une réservation
 * 
 * @package BiblioApp
 * @subpackage Booking
 */

namespace BiblioApp; // On indique que la classe Booking est dans le namespace BiblioApp

class Booking
{
    // Propriétés (variables, attributs)
    private $id;
    private $clientId;
    private $bookId;
    private $dateStart;
    private $dateEnd;

    // Constructeur (méthode magique)
    public function __construct(int $id, int $clientId, array $booksId, string $dateStart, string $dateEnd)
    {
        $this->id = $id;
        $this->clientId = $clientId;
        $this->booksId[] .= $booksId;
        $this->dateStart = $dateStart;
        $this->dateEnd = $dateEnd;
    }

    // TODO : Méthodes (fonctions)

    /**
     * Getters (accesseurs)
     */
    public function getId(): int
    {
        return $this->id;
    }
    public function getClientId(): int
    {
        return $this->clientId;
    }
    public function getBookId(): int
    {
        return $this->bookId;
    }
    public function getDateStart(): string
    {
        return $this->dateStart;
    }
    public function getDateEnd(): string
    {
        return $this->dateEnd;
    }

    /**
     * Setters (mutateurs)
     */
    public function setClientId($clientId): void
    {
        $this->clientId = $clientId;
    }
    public function setBookId($bookId): void
    {
        $this->bookId[] .= $bookId;
    }
    public function setDateStart($dateStart): void
    {
        $this->dateStart = $dateStart;
    }
    public function setDateEnd($dateEnd): void
    {
        $this->dateEnd = $dateEnd;
    }

} // Fin de la classe Booking