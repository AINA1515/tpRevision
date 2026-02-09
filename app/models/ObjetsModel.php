<?php 
namespace app\models;

use Flight;

class ObjetsModel
{
    private $db;
    public function __construct()
    {
        $this->db = Flight::db();
    }

    public function getObjets()
    {
        $stmt = $this->db->prepare("SELECT * FROM objets");
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getObjetByCategories($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM objets WHERE category_id = :category_id");
        $stmt->bindParam('category_id', $id, \PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function getObjetByUser($id)
    {
        $stmt = $this->db->prepare("SELECT * FROM objets WHERE user_id = :user_id");
        $stmt->bindParam('user_id', $id, \PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    } 

    public function getPhotoObjet($idObj)
    {
        $stmt = $this->db->prepare("SELECT * FROM objets_photo WHERE objet_id = :objet_id");
        $stmt->bindParam('objet_id', $idObj, \PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function setOwner($idUser, $idObj)
    {
        $stmt = $this->db->prepare("UPDATE objets SET user_id = :user_id WHERE id = :id");
        $stmt->bindParam('user_id', $idUser, \PDO::PARAM_INT);
        $stmt->bindParam('id', $idObj, \PDO::PARAM_INT);
        return $stmt->execute();
    }
    public function addObjet($name, $description, $category_id, $user_id)
    {
        $stmt = $this->db->prepare("INSERT INTO objets (name, description, category_id, user_id) VALUES (:name, :description, :category_id, :user_id)");
        $stmt->bindParam('name', $name, \PDO::PARAM_STR);
        $stmt->bindParam('description', $description, \PDO::PARAM_STR);
        $stmt->bindParam('category_id', $category_id, \PDO::PARAM_INT);
        $stmt->bindParam('user_id', $user_id, \PDO::PARAM_INT);
        return $stmt->execute();
    }

}