<?php

require_once("models/objets/Exemplaire.php");

class Empruntable extends Exemplaire
{
    private bool $estEmprunte;

    /**
     * Empruntable constructor.
     * @param bool $estEmprunte
     */
    public function __construct(bool $estEmprunte)
    {
        $this->estEmprunte = $estEmprunte;
    }

    /**
     * @return bool
     */
    public function isEstEmprunte(): bool
    {
        return $this->estEmprunte;
    }

    /**
     * @param bool $estEmprunte
     */
    public function setEstEmprunte(bool $estEmprunte): void
    {
        $this->estEmprunte = $estEmprunte;
    }
}