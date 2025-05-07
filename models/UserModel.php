<?php
require 'core/database.php';

class UserModel {
    private $db;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
    }

    public function getAllUsers() {
        $query = $this->db->prepare("SELECT * FROM user");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createUser($nama, $email, $password, $role) {
        $query = $this->db->prepare("INSERT INTO user (nama, email, password, role) VALUES (:nama, :email, :password, :role)");
        return $query->execute(['nama' => $nama, 'email' => $email, 'password' => $password, 'role' => $role]);
    }
}
