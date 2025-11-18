<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Student::index');

// Rutas para Estudiantes
$routes->get('students', 'Student::index');
$routes->get('students/create', 'Student::create');
$routes->post('students/store', 'Student::store');
$routes->get('students/edit/(:num)', 'Student::edit/$1');
$routes->post('students/update/(:num)', 'Student::update/$1');
$routes->get('students/delete/(:num)', 'Student::delete/$1');

// Rutas para Carreras
$routes->get('careers', 'Career::index');
$routes->get('careers/create', 'Career::create');
$routes->post('careers/store', 'Career::store');
$routes->get('careers/edit/(:num)', 'Career::edit/$1');
$routes->post('careers/update/(:num)', 'Career::update/$1');
$routes->get('careers/delete/(:num)', 'Career::delete/$1');

// Rutas comentadas de usuarios
// $routes->get('users', 'Users::index');
// $routes->get('users/create', 'Users::create');
// $routes->post('users/store', 'Users::store');
// $routes->get('users/edit/(:num)', 'Users::edit/$1');
// $routes->post('users/update/(:num)', 'Users::update/$1');
// $routes->get('users/delete/(:num)', 'Users::delete/$1');

