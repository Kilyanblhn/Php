<?php

require_once("models/objets/Exemplaire.php");

class Magazine extends Exemplaire
{
    public int $anneePublication;
    public String $typeMagazine;

    /**
     * Magazine constructor.
     * @param int $reference
     * @param String $titre
     * @param int $anneePublication
     * @param string $typeMagazine
     */
    public function __construct(int $reference, String $titre, int $anneePublication, string $typeMagazine)
    {
        parent::__construct($reference,$titre);
        $this->anneePublication = $anneePublication;
        $this->typeMagazine = $typeMagazine;
    }
    
    /**
     * @return int
     */
    public function getAnneePublication(): int
    {
        return $this->anneePublication;
    }

    /**
     * @param int $anneePublication
     */
    public function setAnneePublication(int $anneePublication): void
    {
        $this->anneePublication = $anneePublication;
    }

    /**
     * @return String
     */
    public function getTypeMagazine(): string
    {
        return $this->type;
    }

    /**
     * @param string $typeMagazine
     */
    public function setTypeMagazine(string $typeMagazine): void
    {
        $this->typeMagazine = $typeMagazine;
    }

}