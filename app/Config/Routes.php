<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// Resource routes for players and matches
$routes->resource('players');
$routes->resource('matches');
