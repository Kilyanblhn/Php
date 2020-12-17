<?php

require('models/CDManager.php');

class CDController
{
    private CDManager $cdManager;

    /**
     * CDController constructor.
     */
    public function __construct()
    {
        $this->cdManager = new CDManager();
    }

    function nouveauCD($titre, $estEmprunte, $artiste, $genre){
        $this->cdManager->nouveauCD($titre, $estEmprunte, $artiste, $genre);
        header('Location: ?page=cd&action=liste');
    }

    function modifierCD($reference, $titre, $artiste, $genre){
        $this->cdManager->modifierCD($reference, $titre, $artiste, $genre);
        header('Location: ?page=cd&action=liste');
    }

    function supprimerCD($reference){
        $this->cdManager->supprimerCD($reference);
        header("Location: ?page=cd&action=liste");
    }

    function getListeCDs(){
        $cds = $this->cdManager->getListeCDs();
        require('views/listeCD.php');
    }

    function getCDByRef($reference){
        $cd = $this->cdManager->getCDByRef($reference);
        require('views/modifierCD.php');
    }

}