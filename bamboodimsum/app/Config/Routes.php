<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


// login
$routes->get('/login', 'Login::index');
$routes->post('/cekUser', 'Login::cekUser');
$routes->get('/logout', 'Login::logout');

// main
$routes->get('/main', 'Main::index');

// level
$routes->get('/level', 'Level::index');
$routes->get('/formTambahLevel', 'Level::formTambahLevel');
$routes->post('/formTambahLevelSimpan', 'Level::formTambahLevelSimpan');
$routes->get('/formLevelEdit/(:any)', 'Level::formLevelEdit/$1');
$routes->post('/formEditLevelSimpan', 'Level::formEditLevelSimpan');
$routes->get('/levelHapus/(:any)', 'Level::levelHapus/$1');

// user
$routes->get('/user', 'User::index');
$routes->get('/formTambahUser', 'User::formTambahUser');
$routes->post('/formTambahUserSimpan', 'User::formTambahUserSimpan');
$routes->get('/formUserEdit/(:any)', 'User::formUserEdit/$1');
$routes->post('/formEditUserSimpan', 'User::formEditUserSimpan');
$routes->get('/userHapus/(:any)', 'User::userHapus/$1');

// menumakanan
$routes->get('/menumakanan', 'Menu::index');
$routes->get('/formTambahMenu', 'Menu::formTambahMenu');
$routes->post('/formTambahMenuSimpan', 'Menu::formTambahMenuSimpan');
$routes->get('/formMenuEdit/(:any)', 'Menu::formMenuEdit/$1');
$routes->post('/formEditMenuSimpan', 'Menu::formEditMenuSimpan');
$routes->get('/menuHapus/(:any)', 'Menu::menuHapus/$1');

// pesanan
$routes->get('/pesanan', 'Pesanan::index');
$routes->get('/tambahKeranjang/(:any)', 'Pesanan::tambahKeranjang/$1');

// pengantaran
$routes->get('/pengantaran', 'Pengantaran::index');




// login pelanggan
$routes->get('/loginPelanggan', 'Login::loginPelanggan');
$routes->post('/cekUserPelanggan', 'Login::cekUserPelanggan');
$routes->get('/registrasi', 'Login::registrasi');
$routes->post('/registrasiSimpan', 'Login::registrasiSimpan');
