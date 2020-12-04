<?php

require_once("models/objets/Empruntable.php");

class CD extends Empruntable
{
    public String $artiste;
    public String $genre;

    /**
     * CD constructor.
     * @param string $titre
     * @param bool $estEmprunte
     * @param String $artiste
     * @param String $genre
     */
    public function __construct(string $titre, bool $estEmprunte, string $artiste, string $genre)
    {
        parent::__construct($titre);
        parent::__construct($estEmprunte);
        $this->artiste = $artiste;
        $this->genre = $genre;
    }

    /**
     * @return String
     */
    public function getArtiste(): string
    {
        return $this->artiste;
    }

    /**
     * @param String $artiste
     */
    public function setArtiste(string $artiste): void
    {
        $this->artiste = $artiste;
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

    public function __toString()
    {
        return "Nom artiste : " + $this->artiste + " Genre : " + $this->genre;
    }

}