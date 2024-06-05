<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// route Auth
$routes->get('/auth', 'Auth::index');
$routes->post('/authCekUser', 'Auth::authCekUser');
$routes->get('/logout', 'Auth::Logout');

// route Main
$routes->get('/main', 'Main::index');

// route level
$routes->get('/level', 'Level::index');
$routes->get('/formLevelTambah', 'Level::formLevelTambah');
$routes->post('/formLevelSimpan', 'Level::formLevelSimpan');
$routes->get('/formLevelEdit/(:any)', 'Level::formLevelEdit/$1');
$routes->post('/formLevelUpdate', 'Level::formLevelUpdate');
$routes->get('/levelHapus/(:any)', 'Level::levelHapus/$1');

// route user
$routes->get('/user', 'User::index');
$routes->get('/formUserTambah', 'User::formUserTambah');
$routes->post('/formUserSimpan', 'User::formUserSimpan');
$routes->get('/formUserEdit/(:any)', 'User::formUserEdit/$1');
$routes->post('/formUserUpdate', 'User::formUserUpdate');
$routes->get('/userHapus/(:any)', 'User::userHapus/$1');

// route kategori
$routes->get('/kategori', 'Kategori::index');
$routes->get('/formKategoriTambah', 'Kategori::formKategoriTambah');
$routes->post('/formKategoriSimpan', 'Kategori::formKategoriSimpan');
$routes->get('/formKategoriEdit/(:any)', 'Kategori::formKategoriEdit/$1');
$routes->post('/formKategoriUpdate', 'Kategori::formKategoriUpdate');
$routes->get('/kategoriHapus/(:any)', 'Kategori::kategoriHapus/$1');

// route menu
$routes->get('/menu', 'Menu::index');
$routes->get('/formMenuTambah', 'Menu::formMenuTambah');
$routes->post('/formMenuSimpan', 'Menu::formMenuSimpan');
$routes->get('/formMenuEdit/(:any)', 'Menu::formMenuEdit/$1');
$routes->post('/formMenuUpdate', 'Menu::formMenuUpdate');
$routes->get('/menuHapus/(:any)', 'Menu::menuHapus/$1');