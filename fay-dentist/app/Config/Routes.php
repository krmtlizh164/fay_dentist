<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


$routes->get('/tentang-kami', 'Home::tentangKami');

// Artikel
$routes->get('/artikel', 'Home::artikel');
$routes->get('/artikel/(:num)', 'Home::viewArtikel/$1');


// Auth
$routes->group('', function($routes) {
    $routes->get('/login', 'Auth::login');
    $routes->post('/login', 'Auth::login');
    $routes->get('/register', 'Auth::register');
    $routes->post('/register', 'Auth::register');
    $routes->get('/register', 'Auth::register');
    $routes->post('/register', 'Auth::register');

    $routes->get('/logout', 'Auth::logout');
});

$routes->get('/logout', 'Auth::logout');

// Reservasi (hanya untuk pasien)
$routes->group('', ['filter' => 'auth:pasien'], function($routes) {
    $routes->get('/reservasi', 'Reservasi::index');
    $routes->get('/reservasi/buat', 'Reservasi::buat');
    $routes->post('/reservasi/buat', 'Reservasi::buat');
    $routes->get('reservasi', 'Reservasi::index');
});

// Admin
$routes->group('admin', ['filter' => 'auth:admin'], function($routes) {
    //$routes->get('/admin', 'Admin::index'); // Halaman admin
    $routes->get('/', 'Admin::index');
    $routes->get('/artikel', 'Admin::artikel');
    $routes->get('/artikel/tambah', 'Admin::tambahArtikel');
    $routes->post('/artikel/tambah', 'Admin::tambahArtikel');
    $routes->get('/artikel/edit/(:num)', 'Admin::editArtikel/$1');
    $routes->post('/artikel/edit/(:num)', 'Admin::editArtikel/$1');
    $routes->get('/artikel/hapus/(:num)', 'Admin::hapusArtikel/$1');
    $routes->get('/reservasi', 'Admin::reservasi');
    $routes->get('/reservasi/update/(:num)/(:any)', 'Admin::updateStatusReservasi/$1/$2');
});

