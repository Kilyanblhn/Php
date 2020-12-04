<?php

class Manager
{
    protected function dbConnect()
    {
        $serveur = 'localhost:3307';
        $utilisateur = 'root';
        $mdp = '';
        $base = 'bibliotheque';

        $db = new PDO("mysql:host=$serveur;dbname=$base", $utilisateur, $mdp);
        if (!$db) {
            die('Erreur connexion base de données : '.$db->errorCode().' : '.$db->errorInfo());
        }
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $db;
    }
}