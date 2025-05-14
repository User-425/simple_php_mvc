<?php 
// routes.php
return [
    'GET' => [
        '/' => ['controller' => 'HomeController', 'action' => 'index'],
        '/home' => ['controller' => 'HomeController', 'action' => 'index'],
        '/about' => ['controller' => 'AboutController', 'action' => 'index'],
        '/login' => ['controller' => 'LoginController', 'action' => 'index'],
        '/register' => ['controller' => 'RegisterController', 'action' => 'index'],
    ],
    'POST' => [
        '/login' => ['controller' => 'LoginController', 'action' => 'login'],
        '/register' => ['controller' => 'RegisterController', 'action' => 'register'],
    ],
];

?>