<?php

require_once("models/objets/Empruntable.php");

class CD extends Empruntable
{
    public String $artiste;
    public String $genre;

    /**
     * CD constructor.
     * @param int $reference
     * @param string $titre
     * @param String $artiste
     * @param String $genre
     */
    public function __construct(int $reference, string $titre, string $artiste, string $genre)
    {
        $this->setReference($reference);
        $this->setTitre($titre);
        $this->setEstEmprunte(false);
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