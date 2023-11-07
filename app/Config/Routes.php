<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/register', 'Home::register');
$routes->get('/ganti', 'Home::ganti');
$routes->get('/produk', 'Produk::index');
