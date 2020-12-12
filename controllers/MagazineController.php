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

    function nouveauMagazine($reference, $titre, $anneePublication, $typeMagazine){
        $this->magazineManager->nouveauMagazine($reference, $titre, $anneePublication, $typeMagazine);
        header('Location: ?page=magazine&action=liste');
    }

    function modifierMagazine($reference, $titre, $anneePublication, $typeMagazine){
        $this->magazineManager->modifierMagazine($reference, $titre, $anneePublication, $typeMagazine);
        header('Location: ?page=magazine&action=liste');
    }

    function supprimerMagazine($ref){
        $this->magazineManager->supprimerMagazine($ref);
        header("Location: ?page=magazine&action=liste");
    }

    function getListeMagazines(){
        $magazines = $this->magazineManager->getListeMagazines();
        require('views/listeMagazines.php');
    }

    function getMagazineByRef($reference){
        $magazine = $this->magazineManager->getMagazineByRef($reference);
        require('views/modifierMagazine.php');
    }
}