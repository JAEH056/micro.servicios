<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('prueba', 'Prueba::index');
$routes->get('residentes', 'Residentes::index');
$routes->get('residentes/datos', 'Residentes::actualiza');
$routes->post('residentes', 'Residentes::guardar');

//$routes->resource('residentes', ['placeholder' => '(:num)', 'except' => 'show']);
