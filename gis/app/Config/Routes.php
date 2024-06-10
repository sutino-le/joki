<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// login
$routes->get('/login', 'Home::index');
$routes->post('/cekUser', 'Home::cekUser');
$routes->get('/logout', 'Home::logout');

// main
$routes->get('/main', 'Main::index');




// level
$routes->get('/datalevel', 'Level::index');
$routes->get('/formTambahLevel', 'Level::formTambahLevel');
$routes->post('/formTambahLevelSimpan', 'Level::formTambahLevelSimpan');
$routes->get('/formLevelEdit/(:any)', 'Level::formLevelEdit/$1');
$routes->post('/formEditLevelSimpan', 'Level::formEditLevelSimpan');
$routes->get('/levelHapus/(:any)', 'Level::levelHapus/$1');

// user
$routes->get('/datauser', 'User::index');
$routes->get('/formTambahUser', 'User::formTambahUser');
$routes->post('/formTambahUserSimpan', 'User::formTambahUserSimpan');
$routes->get('/formUserEdit/(:any)', 'User::formUserEdit/$1');
$routes->post('/formEditUserSimpan', 'User::formEditUserSimpan');
$routes->get('/userHapus/(:any)', 'User::userHapus/$1');


// kategori
$routes->get('/datakategori', 'Kategori::index');
$routes->get('/formTambahKategori', 'Kategori::formTambahKategori');
$routes->post('/formTambahKategoriSimpan', 'Kategori::formTambahKategoriSimpan');
$routes->get('/formKategoriEdit/(:any)', 'Kategori::formKategoriEdit/$1');
$routes->post('/formEditKategoriSimpan', 'Kategori::formEditKategoriSimpan');
$routes->get('/kategoriHapus/(:any)', 'Kategori::kategoriHapus/$1');


// lokasi
$routes->get('/datalokasi', 'Lokasi::index');
$routes->get('/formTambahLokasi', 'Lokasi::formTambahLokasi');
$routes->post('/formTambahLokasiSimpan', 'Lokasi::formTambahLokasiSimpan');
$routes->get('/formLokasiEdit/(:any)', 'Lokasi::formLokasiEdit/$1');
$routes->post('/formEditLokasiSimpan', 'Lokasi::formEditLokasiSimpan');
$routes->get('/lokasiHapus/(:any)', 'Lokasi::lokasiHapus/$1');
$routes->get('/detailLokasi/(:any)', 'Lokasi::detailLokasi/$1');


// intelijen
$routes->get('/dataintelijen', 'Intelijen::index');
$routes->get('/formTambahIntelijen', 'Intelijen::formTambahIntelijen');
$routes->post('/formTambahIntelijenSimpan', 'Intelijen::formTambahIntelijenSimpan');
$routes->get('/formIntelijenEdit/(:any)', 'Intelijen::formIntelijenEdit/$1');
$routes->post('/formEditIntelijenSimpan', 'Intelijen::formEditIntelijenSimpan');
$routes->get('/intelijenHapus/(:any)', 'Intelijen::intelijenHapus/$1');
$routes->get('/detailIntelijen/(:any)', 'Intelijen::detailIntelijen/$1');
