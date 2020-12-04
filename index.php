<?php
session_start();

require('controllers/CDController.php');
require('controllers/MagazineController.php');

$cdController = new CDController();
$magazineController = new MagazineController();

$page = isset($_GET['page']) ? $_GET['page'] : "magazine";
$action = isset($_GET['action']) ? $_GET['action'] : "liste";

switch ($page){
    case "magazine":
        switch ($action){
            case "liste":default:
                $magazineController->getListeMagazines();
                break;
            case "modifier":
                $magazineController->modifierMagazine($_GET["reference"], $_GET["titre"], $_GET["annneePublication"], $_GET["type"]);
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
