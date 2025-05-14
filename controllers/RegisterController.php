<?php 
require 'models/UserModel.php';
class RegisterController {

    private $userModel;
    public function __construct() {
        $this->userModel = new UserModel();
    }
    public function index() {
        require 'views/register.php';
    }

    public function register() {
        if (isset($_POST['submit'])) {
            $user = $this->userModel->getByEmail($_POST);
            if ($user) {
                $_SESSION['error'] = 'Email atau password salah';
                header('Location: /register');
                exit;
            } else {
                $this->userModel->registerUser($_POST);
                header('Location: /login');
            }
            }
    }


}

?>