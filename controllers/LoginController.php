    <?php 
    require 'models/UserModel.php';
    class LoginController {
        private $userModel;

        public function __construct() {
            session_start();
            $this->userModel = new UserModel();
        }

        public function index() {
            require 'views/login.php';
        }

        public function login() {


            if (isset($_POST['submit'])) {
                $user = $this->userModel->checkCredential($_POST);

                if ($user) {
                    $_SESSION['user'] = [
                    'id' => $user['id'],
                    'email' => $user['email'],
                    'role' => $user['role']
                    ];
                    header('Location: /home');
                    exit;
                } else {
                    $_SESSION['error'] = 'Email atau password salah';
                    header('Location: /login');
                    exit;
                }
            }
        }

    }

    ?>