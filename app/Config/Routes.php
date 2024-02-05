<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/Landing', 'Home::Landing');
$routes->get('/admin', 'Home::admin');
$routes->get('/', 'Home::Website');


//login
$routes->get('register', 'Auth::register');
$routes->post('register', 'Auth::register');

$routes->get('login', 'Auth::login');
$routes->post('login', 'Auth::login');


