<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/admin', 'AdminController::index');
$routes->get('/admin/mahasiswa', 'AdminController::mahasiswa');

$routes->get('/form', 'FormController::index');
$routes->post('/form/simpan', 'FormController::simpan');
$routes->get('/form/update/(:any)', 'FormController::update/$1');
$routes->post('/form/update/(:any)', 'FormController::updated/$1');
$routes->get('/form/delete/(:any)', 'FormController::datele/$1');
