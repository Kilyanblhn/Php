<?php

class Exemplaire
{
    public int $reference;
    public String $titre;

    /**
     * Exemplaire constructor.
     * @param int $reference
     * @param String $titre
     */
    public function __construct(int $reference, string $titre)
    {
        $this->reference = $reference;
        $this->titre = $titre;
    }

    /**
     * @return int
     */
    public function getReference(): int
    {
        return $this->reference;
    }

    /**
     * @param int $reference
     */
    public function setReference(int $reference): void
    {
        $this->reference = $reference;
    }

    /**
     * @return String
     */
    public function getTitre(): string
    {
        return $this->titre;
    }

    /**
     * @param String $titre
     */
    public function setTitre(string $titre): void
    {
        $this->titre = $titre;
    }
}