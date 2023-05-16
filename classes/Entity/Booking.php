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
    private $clientId;
    private $bookId;
    private $dateStart;
    private $dateEnd;

    // Constructeur (méthode magique)
    public function __construct(int $clientId, int $bookId, string $dateStart, string $dateEnd)
    {
        $this->clientId = $clientId;
        $this->bookId = $bookId;
        $this->dateStart = $dateStart;
        $this->dateEnd = $dateEnd;
    }

    /**
     * Getters (accesseurs)
     */
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