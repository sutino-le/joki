<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// login
$routes->get('/login', 'Home::index');
$routes->post('/cekUser', 'Home::cekUser');
$routes->get('/logout', 'Home::logout');

// main
$routes->get('/main', 'Main::index');