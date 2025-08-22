<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->set404Override('App\Controllers\ErrorsController::show404');
$routes->get('/', 'AuthController::login');
$routes->post('p_login', 'AuthController::p_login');

$routes->get('dashboard', 'AppController::index');