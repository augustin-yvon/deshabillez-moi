<?php

/**
 * Gère la connexion à la base de données MySQL.
 */
class Database
{
    /**
     * @var PDO Objet PDO utilisé pour la connexion à la base de données.
     */
    public $pdo;

    /**
     * Constructeur de la classe Database.
     *
     * Appelle automatiquement la méthode `connect()` pour établir la connexion à la base de données.
     */
    public function __construct()
    {
        $this->connect();
    }

    /**
     * Établit la connexion à la base de données et configure le mode d'erreur PDO.
     * 
     * @return void
     */
    private function connect(): void
    {
        try {
            $this->pdo = new PDO("mysql:host=localhost;dbname=deshabillez-moi;port=3308", "root", "");
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Erreur PDO : " . $e->getMessage();
        }
    }
}
