<?php
class HomeController {
    public function index() {
        session_start();
        if (!isset($_SESSION['user'])) {
            header('Location: /login');
        }
        require 'views/home.php';
    }
}
