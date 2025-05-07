<?php 
// routes.php
return [
    'GET' => [
        '/' => ['controller' => 'HomeController', 'action' => 'index'],
        '/home' => ['controller' => 'HomeController', 'action' => 'index'],
        '/about' => ['controller' => 'AboutController', 'action' => 'index'],
    ],
    // 'POST' => [
    //     '/login' => ['controller' => 'AuthController', 'action' => 'login'],
    //     '/register' => ['controller' => 'AuthController', 'action' => 'register'],
    // ],
];

?>