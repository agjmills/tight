<?php

$router->get('/', 'HomeController@index');

$router->set404('ErrorController@pageNotFound');