<?php
require __DIR__ . '/../vendor/autoload.php';

$app = \Asdfx\Tight\Tight::boot(__DIR__);
$router = $app->getRouter();
$router->setNamespace('App\\Http\\Controllers');
require __DIR__ . '/../routes/web.php';
$router->run();