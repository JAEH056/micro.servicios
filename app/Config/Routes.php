<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Residentes;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('prueba',[Residentes::class, 'index']);
$routes->get('residentes',[RouteCollection::class, 'index']);
$routes->get('residentes/datos',[RouteCollection::class, 'index']);
$routes->get('residentes',[Residentes::class, 'guardar']);

//$routes->resource('residentes', ['placeholder' => '(:num)', 'except' => 'show']);
