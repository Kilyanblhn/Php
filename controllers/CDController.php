<?php

require('models/CDManager.php');

class CDController
{
    private CDManager $cdManager;

    /**
     * CDController constructor.
     * @param CDManager $cdManager
     */
    public function __construct()
    {
        $this->cdManager = new CDManager();
    }

    function nouveauCD($titre, $artiste, $genre){
        $this->cdManager->nouveauCD($titre, $artiste, $genre);
    }

    function modifierCD($id, $titre, $artiste, $genre){
        $this->cdManager->modifierCD($id, $titre, $artiste, $genre);
    }

    function supprimerCD($id){
        $this->cdManager->supprimerCD($id);
    }

    function getListeCDs(){
        $cds = $this->cdManager->getListeCDs();
        require('views/listeCD.php');
    }

    function getCDById($id){
        $cd = $this->cdManager->getCDById($id);
    }

}