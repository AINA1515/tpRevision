<?php

namespace app\models;

use PDO;
use PDOException;

class Connexion
{
    public static function db()
    {
        // Charger la config
        $config = require __DIR__ . '/../config/config.php';

        // Construire le DSN
        $dsn = 'pgsql:host=' . $config['database']['host']
            . ';dbname=' . $config['database']['dbname'];
        // Si le port est séparé dans config, tu peux ajouter :
        $dsn .= ';port=' . $config['database']['port'];

        try {
            $db = new PDO($dsn, $config['database']['user'], $config['database']['password']);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
        } catch (PDOException $e) {
            echo "Erreur de connexion : " . $e->getMessage();
            return null;
        }
    }

    public function getConnexion()
    {
        return self::db();
    }
}
