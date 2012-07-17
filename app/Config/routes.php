<?php
Router::parseExtensions('css');
Router::connect('/', array('controller' => 'pages', 'action' => 'home'));
Router::connect('/login', array('controller' => 'users', 'action' => 'login'));
Router::connect('/logout', array('controller' => 'users', 'action' => 'logout'));
Router::connect('/signup', array('controller' => 'users', 'action' => 'add'));
CakePlugin::routes();
require CAKE . 'Config' . DS . 'routes.php';
