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

$routes->get('/user/list', 'Login::display',  ['filter' => 'authGuard']);
$routes->get('/user/editar/(:any)', 'Login::editar/$1',  ['filter' => 'authGuard']);
$routes->post('/user/editar/(:any)', 'Login::editar/$1',  ['filter' => 'authGuard']);
$routes->get('/user/borrar/(:any)', 'Login::borrar/$1',  ['filter' => 'authGuard']);
$routes->get('/user/list', 'Login::display',  ['filter' => 'authGuard']);

$routes->get('/father', 'Father::display',  ['filter' => 'authGuard']);
$routes->post('/father/registrar', 'Father::registrar',['filter' => 'authGuard']);
$routes->get('/father/registrar', 'Father::registrar',['filter' => 'authGuard']);
$routes->get('/father/editar/(:any)', 'Father::editar/$1',  ['filter' => 'authGuard']);
$routes->post('/father/editar/(:any)', 'Father::editar/$1',  ['filter' => 'authGuard']);
$routes->get('/father/borrar/(:any)', 'Father::borrar/$1',  ['filter' => 'authGuard']);


$routes->get('/teacher', 'Teacher::display',  ['filter' => 'authGuard']);
$routes->post('/teacher/registrar', 'Teacher::registrar',['filter' => 'authGuard']);
$routes->get('/teacher/registrar', 'Teacher::registrar',['filter' => 'authGuard']);
$routes->get('/teacher/editar/(:any)', 'Teacher::editar/$1',  ['filter' => 'authGuard']);
$routes->post('/teacher/editar/(:any)', 'Teacher::editar/$1',  ['filter' => 'authGuard']);
$routes->get('/teacher/borrar/(:any)', 'Teacher::borrar/$1',  ['filter' => 'authGuard']);

$routes->get('/cook', 'Cook::display',  ['filter' => 'authGuard']);
$routes->post('/cook/registrar', 'Cook::registrar',['filter' => 'authGuard']);
$routes->get('/cook/registrar', 'Cook::registrar',['filter' => 'authGuard']);
$routes->get('/cook/editar/(:any)', 'Cook::editar/$1',  ['filter' => 'authGuard']);
$routes->post('/cook/editar/(:any)', 'Cook::editar/$1',  ['filter' => 'authGuard']);
$routes->get('/cook/borrar/(:any)', 'Cook::borrar/$1',  ['filter' => 'authGuard']);

$routes->get('/class', 'Classes::display',  ['filter' => 'authGuard']);
$routes->post('/class/registrar', 'Classes::registrar',['filter' => 'authGuard']);
$routes->get('/class/registrar', 'Classes::registrar',['filter' => 'authGuard']);
$routes->get('/class/editar/(:any)', 'Classes::editar/$1',  ['filter' => 'authGuard']);
$routes->post('/class/editar/(:any)', 'Classes::editar/$1',  ['filter' => 'authGuard']);
$routes->get('/class/borrar/(:any)', 'Classes::borrar/$1',  ['filter' => 'authGuard']);



