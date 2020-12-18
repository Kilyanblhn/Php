<?php

require_once ("objets/CD.php");
require_once("models/Manager.php");

class CDManager extends Manager
{

    public function nouveauCD(String $titre, int $estEmprunte, String $artiste, String $genre){
        var_dump($estEmprunte);
        $db = $this->dbConnect();
        $stmt = $db->prepare('INSERT INTO `cd` (`titre`, `estEmprunte`, `artiste`, `genre`) VALUES (:titre, :estEmprunte, :artiste, :genre)');
        $params = ['titre' => $titre, 'estEmprunte' => $estEmprunte, 'artiste' => $artiste, 'genre' => $genre];
        $stmt->execute($params);
    }

    public function modifierCD(int $reference, String $titre, int $estEmprunte, String $artiste, String $genre) : void {
        $db = $this->dbConnect();
        $stmt = $db->prepare('UPDATE `cd` SET titre = :titre, estEmprunte = :estEmprunte, artiste = :artiste, genre = :genre WHERE (`reference` = :reference)');
        $params = ['reference' => $reference, 'titre' => $titre, 'estEmprunte' => $estEmprunte, 'artiste' => $artiste, 'genre' => $genre];
        $stmt->execute($params);
    }

    public function supprimerCD($reference): void {
        $db = $this->dbConnect();
        $stmt = $db->prepare('DELETE FROM `cd` WHERE `reference` = :reference');
        $params = ['reference' => $reference];
        $stmt->execute($params);
    }

    public function getListeCDs(): array {
        $cds = array();

        $db = $this->dbConnect();
        $listeCDs = $db->query('SELECT * FROM cd');
        while ($unCD = $listeCDs->fetch()) {
            $cd = new CD($unCD["reference"], $unCD["titre"], $unCD["artiste"], $unCD["genre"]);
            $cd->setEstEmprunte($unCD["estEmprunte"]);
            array_push($cds, $cd);
        }
        return $cds;
    }

    public function getCDByRef($reference) : CD {
        $db = $this->dbConnect();
        $stmt = $db->prepare('SELECT * FROM cd WHERE reference= :reference');
        $params = ['reference' => $_GET['reference']];
        $stmt->execute($params);

        $unCD = $stmt->fetch();

        $cd = new CD($unCD["reference"], $unCD["titre"], $unCD["artiste"], $unCD["genre"]);
        $cd->setEstEmprunte($unCD["estEmprunte"]);

        return $cd;
    }
}