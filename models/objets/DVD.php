<?php

require_once("models/objets/Empruntable.php");

class DVD extends Empruntable
{
    private String $genre;
    private int $duree;

    /**
     * DVD constructor.
     * @param string $titre
     * @param bool $estEmprunte
     * @param String $genre
     * @param int $duree
     */
    public function __construct(string $titre, bool $estEmprunte, string $genre, int $duree)
    {
        parent::__construct($titre);
        parent::__construct($estEmprunte);
        $this->genre = $genre;
        $this->duree = $duree;
    }

    /**
     * @return String
     */
    public function getGenre(): string
    {
        return $this->genre;
    }

    /**
     * @param String $genre
     */
    public function setGenre(string $genre): void
    {
        $this->genre = $genre;
    }

    /**
     * @return int
     */
    public function getDuree(): int
    {
        return $this->duree;
    }

    /**
     * @param int $duree
     */
    public function setDuree(int $duree): void
    {
        $this->duree = $duree;
    }
}