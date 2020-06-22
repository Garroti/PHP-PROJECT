<?php

$router->add('GET', '/', fn () => 'estamos na homepage');

$router->add('GET', '/users', '\App\Controllers\UsersController::showAll');

$router->add('GET', '/users/(\d+)', '\App\Controllers\UsersController::show');
