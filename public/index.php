<?php
require __DIR__ . '/../vendor/autoload.php';

$router = new \Bramus\Router\Router();
$router->setNamespace('App\\Http\\Controllers');
require __DIR__ . '/../routes/web.php';
$router->run();