<?php

abstract class abstractDbManager
{
    // Propriétés
    protected PDO $pdo;

    // Méthodes magique
    public function __construct()
    {
        $this->connectionDb();
    }

    // Méthodes custom
    private function connectionDb()
    {
        try {


            $host = "localhost";
            $dbname = "harmonie";
            $login = "nadir";
            $password = "";

            $this->pdo = new PDO("mysql:host={$host};dbname={$dbname}", $login, $password);
        } catch (PDOException $error) {
            echo "Erreur de connexion : " . $error->getMessage();
        }
    }
};

?>