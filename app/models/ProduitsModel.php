<?php

namespace app\models;

use Flight;

class ProduitsModel
{

    private $db;
    public function __construct()
    {
        $this->db = Flight::db();
    }

    public function getProduits()
    {
        $stmt = $this->db->prepare("SELECT * FROM produits");
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getProduit($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM produits WHERE id = :id");
        $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

}
