<?php
namespace app\models;

class UserModel{
    private $db;

    public function __construct($pdo)
    {
        $this->db = $pdo;
    }

    public function getUser($email, $password,$name)
    {
        $sql = "SELECT * FROM user WHERE email = :email AND password = :password and name= :name";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            'name' =>$name,
            'email' => $email,
            'password' => $password 
        ]);

        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }
    
    public function getAllUser()
    {
        $sql = "SELECT * FROM user";
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getUserById($id)
    {
        $sql = "SELECT * FROM user WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['id' => $id]);

        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function createUser($name, $email, $password)
    {
        $sql = "INSERT INTO user (name, email, password) VALUES (:name, :email, :password)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([
            'name' => $name,
            'email' => $email,
            'password' => $password
        ]);
    }
}