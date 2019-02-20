<?php
require __DIR__ . '/../vendor/autoload.php';

$app = new \Asdfx\Tight\Tight();
$router = $app->getRouter();
$router->setNamespace('App\\Http\\Controllers');
require __DIR__ . '/../routes/web.php';
$router->run();