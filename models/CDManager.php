<?php

require_once ("objets/CD.php");
require_once("models/Manager.php");

class CDManager extends Manager
{

    public function nouveauCD(String $titre, bool $estEmprunte, String $artiste, String $genre){
        $db = $this->dbConnect();
        $stmt = $db->prepare('INSERT INTO `CD` (`titre`, `estEmprunte` `artiste`, `type`) VALUES (:titre, :estEmprunte, :artiste, :genre)');
        $params = ['titre' => $titre, 'estEmprunte' => $estEmprunte, 'artiste' => $artiste, 'genre' => $genre];
        $stmt->execute($params);
    }

    public function modifierCD(int $reference, String $titre, bool $estEmprunte, String $artiste, String $genre) : void {
        $db = $this->dbConnect();
        $stmt = $db->prepare('UPDATE `CD` SET titre = :titre, estEmprunte = :estEmprunte, artiste = :artiste, genre = :genre WHERE (`reference` = :reference)');
        $params = ['reference' => $reference, 'titre' => $titre, 'estEmprunte' => $estEmprunte, 'artiste' => $artiste, 'genre' => $genre];
        $stmt->execute($params);
    }

    public function supprimerCD($reference): void {
        $db = $this->dbConnect();
        $stmt = $db->prepare('DELETE FROM `CD` WHERE `reference` = :reference');
        $params = ['reference' => $reference];
        $stmt->execute($params);
    }

    public function getListeCDs(): array {
        $cds = array();

        $db = $this->dbConnect();
        $listeCDs = $db->query('SELECT * FROM cd');
        while ($unCD = $listeCDs->fetch()) {
            $cds[] = new CD($unCD["reference"], $unCD["titre"], $unCD["estEmprunte"], $unCD["artiste"], $unCD["genre"]);
        }
        return $cds;
    }

    public function getCDByRef($reference) : CD {
        $db = $this->dbConnect();
        $stmt = $db->prepare('SELECT * FROM cd WHERE reference= :reference');
        $params = ['reference' => $reference];
        $stmt->execute($params);

        $unCD = $stmt->fetch();

        return new CD($unCD["reference"], $unCD["titre"], $unCD["estEmpunte"], $unCD["artiste"], $unCD["genre"]);
    }
}