<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index', ['filter' => 'authGuard']);
$routes->get('/login', 'Login::index');
$routes->post('/login/login', 'Login::login');
$routes->get('/login/logout', 'Login::logout',  ['filter' => 'authGuard']);

$routes->get('/login/registrar', 'Login::registrar');
$routes->post('/login/registrar', 'Login::registrar');

$routes->get('/user/list', 'Login::display',  ['filter' => 'authGuardAdmin']);
$routes->get('/user/editar/(:any)', 'Login::editar/$1',  ['filter' => 'authGuardAdmin']);
$routes->post('/user/editar/(:any)', 'Login::editar/$1',  ['filter' => 'authGuardAdmin']);
$routes->get('/user/borrar/(:any)', 'Login::borrar/$1',  ['filter' => 'authGuardAdmin']);
$routes->get('/user/list', 'Login::display',  ['filter' => 'authGuardAdmin']);

$routes->get('/father', 'Father::display',  ['filter' => 'authGuardAdmin']);
$routes->post('/father/registrar', 'Father::registrar',['filter' => 'authGuardAdmin']);
$routes->get('/father/registrar', 'Father::registrar',['filter' => 'authGuardAdmin']);
$routes->get('/father/editar/(:any)', 'Father::editar/$1',  ['filter' => 'authGuardAdmin']);
$routes->post('/father/editar/(:any)', 'Father::editar/$1',  ['filter' => 'authGuardAdmin']);
$routes->get('/father/borrar/(:any)', 'Father::borrar/$1',  ['filter' => 'authGuardAdmin']);


$routes->get('/teacher', 'Teacher::display',  ['filter' => 'authGuardAdmin']);
$routes->post('/teacher/registrar', 'Teacher::registrar',['filter' => 'authGuardAdmin']);
$routes->get('/teacher/registrar', 'Teacher::registrar',['filter' => 'authGuardAdmin']);
$routes->get('/teacher/editar/(:any)', 'Teacher::editar/$1',  ['filter' => 'authGuardAdmin']);
$routes->post('/teacher/editar/(:any)', 'Teacher::editar/$1',  ['filter' => 'authGuardAdmin']);
$routes->get('/teacher/borrar/(:any)', 'Teacher::borrar/$1',  ['filter' => 'authGuardAdmin']);



