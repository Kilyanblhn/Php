<?php

require_once ("objets/CD.php");
require_once("models/Manager.php");

class CDManager extends Manager
{

    public function nouveauCD(String $titre, bool $estEmprunte, String $artiste, String $genre){
        $db = $this->dbConnect();
        $stmt = $db->prepare('INSERT INTO `CD` (`titre`, `estEmprunte` `artiste`, `type`) VALUES (:titre, :estEmprunte, :artiste, :genre)');
        $params = ['titre' => $_GET['titre'], 'estEmprunte' => $_GET['estEmprunte'], 'artiste' => $_GET['artiste'], 'genre' => $_GET['genre']];
        $stmt->execute($params);
    }

    public function modifierCD(int $reference, String $titre, bool $estEmprunte, String $artiste, String $genre){
        $db = $this->dbConnect();
        $stmt = $db->prepare('UPDATE `CD` SET titre = :titre, estEmprunte = :estEmprunte, artiste = :artiste, genre = :genre WHERE (`reference` = :reference)');
        $params = ['reference' => $_GET['reference'], 'titre' => $_GET['titre'], 'estEmprunte' => $_GET['estEmprunte'], 'artiste' => $_GET['artiste'], 'genre' => $_GET['genre']];
        $stmt->execute($params);
    }

    public function supprimerCD($reference){
        $db = $this->dbConnect();
        $stmt = $db->prepare('DELETE FROM `CD` WHERE `reference` = :reference');
        $params = ['reference' => $_GET['reference']];
        $stmt->execute($params);
    }

    public function getListeCDs(): array {
        $cds = array();

        $db = $this->dbConnect();
        $listeCDs = $db->query('SELECT * FROM cd');
        while ($unCD = $listeCDs->fetch()) {
            $cds[] = new CD($unCD["titre"], $unCD["estEmpunte"], $unCD["artiste"], $unCD["genre"]);
        }
        return $cds;
    }

    public function getCDById($reference) : CD {
        $db = $this->dbConnect();
        $stmt = $db->prepare('SELECT * FROM cd WHERE reference=?');
        $stmt->execute(array(
            $reference
        ));
        $unCD = $stmt->fetch();

        return new CD($unCD["titre"], $unCD["estEmpunte"], $unCD["artiste"], $unCD["genre"]);
    }
}