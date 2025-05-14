<?php
require 'core/database.php';

class UserModel {
    private $db;
    public $error;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
    }

    public function getAllUsers() {
        $query = $this->db->prepare("SELECT * FROM user");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getByEmail($user) {
        $email = $user['email'];
        $query = $this->db->prepare("SELECT * FROM user WHERE email = :email");
        $query->execute(['email' => $email]);
        $result = $query->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function checkCredential($user) {
        $password = $user['password'];
        $result = $this->getByEmail($user);

        if ($result) {
            if ($result['password'] == $password) {
                return $result;
            } else {
                $this->error = "Username atau password salah";
                return false;
            }
        }

        return false;
        
        // if ($result && password_verify($password, $result['password'])) {
        //     return $result;
        // } 
    }

    public function registerUser($data) {
        $query = $this->db->prepare("INSERT INTO user (nama, email, password) VALUES (:nama, :email, :password)");
        return $query->execute(['nama' => $data['nama'], 'email' => $data['email'], 'password' => $data['password']]);
    }

    public function createUser($nama, $email, $password, $role) {
        $query = $this->db->prepare("INSERT INTO user (nama, email, password, role) VALUES (:nama, :email, :password, :role)");
        return $query->execute(['nama' => $nama, 'email' => $email, 'password' => $password, 'role' => $role]);
    }
}
