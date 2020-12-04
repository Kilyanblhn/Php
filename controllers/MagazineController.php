<?php

require('models/MagazineManager.php');

class MagazineController
{

    private MagazineManager $magazineManager;

    /**
     * MagazineController constructor.
     */
    public function __construct()
    {
        $this->magazineManager = new MagazineManager();
    }

    function nouveauMagazine($titre, $anneePublication, $type){
        $this->magazineManager->nouveauMagazine($titre, $anneePublication, $type);
    }

    function modifierMagazine($id, $titre, $anneePublication, $type){
        $this->magazineManager->modifierMagazine($id, $titre, $anneePublication, $type);
    }

    function supprimerMagazine($id){
        $this->magazineManager->supprimerMagazine($id);
    }

    function getListeMagazines(){
        $magazines = $this->magazineManager->getListeMagazines();
        require('views/listeMagazines.php');
    }

    function getMagazineById($id){
        $magazine = $this->magazineManager->getMagazineById($id);
    }
}