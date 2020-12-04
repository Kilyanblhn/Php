<?php
session_start();

require('controllers/CDController.php');
require('controllers/MagazineController.php');

$cdController = new CDController();
$magazineController = new MagazineController();

if(isset($_GET['page'])){
    $page = $_GET['page'];
} else {
    $page = 'accueil';
}

if(isset($_GET['action'])){
    $action = $_GET['action'];
} else {
    $action = 'entete';
}

if(isset($_GET['reference'])){
    $reference = $_GET['reference'];
} else {
    $reference = 0;
}

switch ($page){
    case "accueil":default:
        switch ($action){
            case "entete":
                require('views/entete.php');
                break;
        }
    break;
    case "magazine":
        switch ($action){
            case "liste":
                $magazineController->getListeMagazines();
                break;
            case "modifier":
                $magazineController->modifierMagazine($_GET["reference"], $_GET["titre"], $_GET["annneePublication"], $_GET["typeMagazine"]);
                break;
            case "consulter":
                $magazineController->getMagazineByRef($reference);
                break;
            case "supprimer":
                $magazineController->supprimerMagazine($reference);
                break;
        }
    break;
    case "cd":
        switch ($action){
            case "liste":default:
                $cdController->getListeCDs();
                break;
        }
    break;
}
