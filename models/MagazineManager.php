<?php

require_once ("objets/Magazine.php");
require_once("models/Manager.php");

class MagazineManager extends Manager
{

    public function nouveauMagazine(String $titre, int $anneePublication, String $type){
        $db = $this->dbConnect();
        $stmt = $db->prepare('INSERT INTO `magazine` (`titre`, `anneePublication`, `type`) VALUES (:titre, :anneePublication, :type)');
        $params = ['titre' => $_POST['titre'], 'anneePublication' => $_POST['anneePublication'], 'type' => $_POST['type']];
        $stmt->execute($params);
    }

    public function modifierMagazine(int $reference, String $titre, int $anneePublication, String $type){
        $db = $this->dbConnect();
        $stmt = $db->prepare('UPDATE `magazine` SET titre = :titre, anneePublication = :anneePublication, type = :type WHERE (`reference` = :reference)');
        $params = ['reference' => $_POST['reference'], 'titre' => $_POST['titre'], 'anneePublication' => $_POST['anneePublication'], 'type' => $_POST['type']];
        $stmt->execute($params);
    }

    public function supprimerMagazine($reference){
        $db = $this->dbConnect();
        $stmt = $db->prepare('DELETE FROM `magazine` WHERE `reference` = :reference');
        $params = ['reference' => $_POST['reference']];
        $stmt->execute($params);
    }

    public function getListeMagazines(): array {
        $magazines = array();

        $db = $this->dbConnect();
        $listeMagazines = $db->query('SELECT * FROM magazine');
        while ($unMagazine = $listeMagazines->fetch()) {
            $magazines[] = new Magazine($unMagazine["reference"], $unMagazine["titre"], $unMagazine["anneePublication"], $unMagazine["type"]);
        }
        return $magazines;
    }

    public function getMagazineByRef($reference) : Magazine {
        $db = $this->dbConnect();
        $stmt = $db->prepare('SELECT * FROM magazine WHERE reference=?');
        $params = ['reference' => $_POST['reference']];
        $stmt->execute($params);
        $unMagazine = $stmt->fetch();

        return new Magazine($unMagazine["reference"], $unMagazine["titre"], $unMagazine["anneePublication"], $unMagazine["type"]);
    }

}