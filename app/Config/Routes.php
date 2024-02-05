<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/Landing', 'Home::Landing');
$routes->get('/admin', 'Home::admin');
$routes->get('/', 'Home::Website');
$routes->get('/Success', 'Home::Success');


//login
$routes->get('register', 'Auth::register');
$routes->post('register', 'Auth::register');

$routes->get('login', 'Auth::login');
$routes->post('login', 'Auth::login');

//members

// app/Config/Routes.php

// app/Config/Routes.php

$routes->get('/members', 'Members::index');
$routes->get('/members/create', 'Members::create');
$routes->post('/members/store', 'Members::store');
$routes->get('/members/edit/(:num)', 'Members::edit/$1');
$routes->post('/members/update/(:num)', 'Members::update/$1');


