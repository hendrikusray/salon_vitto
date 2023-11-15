<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/register', 'Home::register');
$routes->get('/ganti', 'Home::ganti');
$routes->get('/produk', 'Produk::index');


$routes->add('member/post', 'Member::post');
$routes->add('member/login', 'Member::login');
$routes->add('product/post', 'Produk::post');
$routes->delete('product/delete', 'Produk::delete');

$routes->get('/crm/layanan/list', 'Produk::list');

$routes->get('/crm/layanan', 'Produk::index');
$routes->get('/crm/produk', 'Produk::indexProduk');

// app/Config/Routes.php

$routes->post('/barang/post', 'Produk::postProduk');
$routes->post('/product/update', 'Produk::updateProduk');
$routes->post('/delete/produk', 'Produk::deleteProduct');
$routes->post('/product-barang/update', 'Produk::updateBarang');

$routes->add('writable/uploads/(:any)', 'FilesController::index/$1');





// $routes->get('/register','Member:index');
