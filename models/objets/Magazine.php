<?php

require_once("models/objets/Exemplaire.php");

class Magazine extends Exemplaire
{
    public int $anneePublication;
    public String $type;

    /**
     * Magazine constructor.
     * @param String $titre
     * @param int $anneePublication
     * @param String $type
     */
    public function __construct(int $reference, String $titre, int $anneePublication, string $type)
    {
        parent::__construct($reference,$titre);
        $this->anneePublication = $anneePublication;
        $this->type = $type;
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
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param String $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

}