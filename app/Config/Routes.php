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
$routes->post('/login/registrar', 'Login::registrar');

$routes->get('/paciente/display', 'Paciente::display',  ['filter' => 'authGuard']);
$routes->match(['get', 'post'], '/paciente/registrar', 'Paciente::registrar', ['filter' => 'authGuard']);
$routes->get('/paciente/editar/(:any)', 'Paciente::editar/$1',  ['filter' => 'authGuard']);
$routes->get('/paciente/borrar/(:any)', 'Paciente::borrar/$1',  ['filter' => 'authGuard']);
$routes->post('/paciente/editar/(:any)', 'Paciente::editar/$1',  ['filter' => 'authGuard']);

$routes->get('/estudiante/display', 'Estudiante::display',  ['filter' => 'authGuardAdmin']);
$routes->match(['get', 'post'], '/estudiante/registrar', 'Estudiante::registrar', ['filter' => 'authGuardAdmin']);
$routes->get('/estudiante/editar/(:any)', 'Estudiante::editar/$1',  ['filter' => 'authGuardAdmin']);
$routes->post('/estudiante/editar/(:any)', 'Estudiante::editar/$1',  ['filter' => 'authGuardAdmin']);
$routes->get('/estudiante/borrar/(:any)', 'Estudiante::borrar/$1',  ['filter' => 'authGuardAdmin']);

$routes->get('/user/list', 'Login::display',  ['filter' => 'authGuardAdmin']);
$routes->get('/user/editar/(:any)', 'Login::editar/$1',  ['filter' => 'authGuardAdmin']);
$routes->post('/user/editar/(:any)', 'Login::editar/$1',  ['filter' => 'authGuardAdmin']);
$routes->get('/user/borrar/(:any)', 'Login::borrar/$1',  ['filter' => 'authGuardAdmin']);

$routes->get('/test/display', 'Test::display',  ['filter' => 'authGuardAdmin']);
$routes->match(['get', 'post'], '/test/registrar', 'Test::registrar', ['filter' => 'authGuardAdmin']);
$routes->get('/test/editar/(:any)', 'Test::editar/$1',  ['filter' => 'authGuardAdmin']);
$routes->post('/test/editar/(:any)', 'Test::editar/$1',  ['filter' => 'authGuardAdmin']);
$routes->get('/test/borrar/(:any)', 'Test::borrar/$1',  ['filter' => 'authGuardAdmin']);
$routes->get('/test/activar/(:any)', 'Test::activar/$1',  ['filter' => 'authGuardAdmin']);

$routes->match(['get', 'post'], '/test/registrartest/(:any)', 'Test::registrartest/$1', ['filter' => 'authGuard']);
$routes->match(['get', 'post'], '/test/registrartestpaciente', 'Test::registrartestpaciente', ['filter' => 'authGuard']);
$routes->get('/test/testeditar/(:any)', 'Test::editartest/$1',  ['filter' => 'authGuard']);
$routes->post('/test/testeditar/(:any)', 'Test::editartest/$1',  ['filter' => 'authGuard']);
$routes->get('/test/testdisplay', 'Test::testdisplay',  ['filter' => 'authGuard']);
$routes->get('/test/testborrar/(:any)', 'Test::borrartest/$1',  ['filter' => 'authGuard']);


$routes->get('/cita/display', 'Cita::display',  ['filter' => 'authGuard']);
$routes->match(['get', 'post'], '/cita/registrar', 'Cita::registrar', ['filter' => 'authGuard']);
$routes->get('/cita/editar/(:any)', 'Cita::editar/$1',  ['filter' => 'authGuard']);
$routes->post('/cita/editar/(:any)', 'Cita::editar/$1',  ['filter' => 'authGuard']);
$routes->get('/cita/borrar/(:any)', 'Cita::borrar/$1',  ['filter' => 'authGuard']);
$routes->get('/cita/activar/(:any)', 'Cita::activar/$1',  ['filter' => 'authGuard']);

$routes->match(['get', 'post'], '/conyugue/registrar/(:any)', 'Conyugue::registrar/$1', ['filter' => 'authGuard']);
$routes->get('/conyugue/editar/(:any)', 'Conyugue::editar/$1',  ['filter' => 'authGuard']);
$routes->post('/conyugue/editar/(:any)', 'Conyugue::editar/$1',  ['filter' => 'authGuard']);

$routes->match(['get', 'post'], '/ficha/registrar/(:any)', 'Ficha::registrar/$1', ['filter' => 'authGuard']);
$routes->get('/ficha/editar/(:any)', 'Ficha::editar/$1',  ['filter' => 'authGuard']);
$routes->post('/ficha/editar/(:any)', 'Ficha::editar/$1',  ['filter' => 'authGuard']);




