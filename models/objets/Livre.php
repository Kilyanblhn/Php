<?php

require_once("models/objets/Empruntable.php");

class Livre extends Empruntable
{
    private String $auteur;
    private String $maisonPublication;

    /**
     * Livre constructor.
     * @param string $titre
     * @param bool $estEmprunte
     * @param String $auteur
     * @param String $maisonPublication
     */
    public function __construct(string $titre, bool $estEmprunte, string $auteur, string $maisonPublication)
    {
        parent::__construct($titre);
        parent::__construct($estEmprunte);
        $this->auteur = $auteur;
        $this->maisonPublication = $maisonPublication;
    }

    /**
     * @return String
     */
    public function getAuteur(): string
    {
        return $this->auteur;
    }

    /**
     * @param String $auteur
     */
    public function setAuteur(string $auteur): void
    {
        $this->auteur = $auteur;
    }

    /**
     * @return String
     */
    public function getMaisonPublication(): string
    {
        return $this->maisonPublication;
    }

    /**
     * @param String $maisonPublication
     */
    public function setMaisonPublication(string $maisonPublication): void
    {
        $this->maisonPublication = $maisonPublication;
    }

}