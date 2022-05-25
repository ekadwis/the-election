<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
* --------------------------------------------------------------------
* Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

$routes->get('/', 'Home::index');
$routes->get('/login', 'AuthController::index');
$routes->post('/postlogin', 'AuthController::postlogin');
$routes->post('/logout', 'AuthController::logout');

// Pemilih routes 

$routes->group('paslon', ['namespace' => 'App\Controllers\Pemilih'], ['filter' => 'loginfilter'], function ($routes) {
    $routes->get('/', 'PemilihanController::index');
    $routes->get('detail/(:any)', 'PemilihanController::detail/$1');
    $routes->get('token/(:any)', 'PemilihanController::token/$1');
    $routes->get('countdown', 'PemilihanController::countdown');
    $routes->post('setcountdown', 'PemilihanController::setcountdown');
    $routes->get('hasil', 'PemilihanController::hasil');
    $routes->post('addriwayat', 'PemilihanController::addriwayat');
    $routes->get('finished', 'PemilihanController::finished');
});

// Admin routes

$routes->group('admin', ['namespace' => 'App\Controllers\Admin'], ['filter' => 'adminfilter'], function ($routes) {
    $routes->group('paslon', function ($routes) {
        $routes->get('/', 'DataPaslonController::index');
        $routes->post('addpaslon', 'DataPaslonController::addpaslon');
        $routes->get('detail/(:any)', 'DataPaslonController::detail/$1');
        $routes->post('updatepaslon(:any)', 'DataPaslonController::updatepaslon/$1');
        $routes->get('edit/(:any)', 'DataPaslonController::edit/$1');
        $routes->get('delete/(:any)', 'DataPaslonController::delete/$1');
    });

    $routes->group('pemilih', function ($routes) {
        $routes->get('/', 'DataPemilihController::index');
        $routes->post('add', 'DataPemilihController::create');
        $routes->get('detail/(:any)', 'DataPemilihController::detail/$1');
        $routes->get('edit/(:any)', 'DataPemilihController::edit/$1');
        $routes->post('update/(:any)', 'DataPemilihController::update/$1');
        $routes->get('delete/(:any)', 'DataPemilihController::delete/$1');
    });

    $routes->group('siswa', function ($routes) {
        $routes->get('/', 'SiswaController::index');
        $routes->post('add', 'SiswaController::create');
        $routes->get('edit/(:any)', 'SiswaController::edit/$1');
        $routes->post('update/(:any)', 'SiswaController::update/$1');
        $routes->get('delete/(:any)', 'SiswaController::delete/$1');
    });

    $routes->group('riwayat-pemilihan', function ($routes) {
        $routes->get('/', 'RiwayatPemilihanController::index');
    });

    $routes->group('hasil-pemilihan', function ($routes) {
        $routes->get('/', 'HasilPemilihanController::index');
    });
});

// Old Pemilih Routes

// $routes->get('/paslon', 'PemilihanController::paslon', ['filter' => 'loginfilter']);
// $routes->get('/detail', 'PemilihanController::detail');
// $routes->post('/setpemilihan', 'PemilihanController::setpemilihan');
// $routes->get('/token', 'PemilihanController::token', ['filter' => 'loginfilter']);
// $routes->get('/countdown', 'PemilihanController::countdown');
// $routes->get('/hasil', 'PemilihanController::hasil');
// $routes->get('/finished', 'PemilihanController::finished');

// Old Admin Routes

// $routes->get('/data-paslon', 'DataPaslonController::index', ['filter' => 'loginfilter']);
// $routes->get('/detail-paslon/(:any)', 'DataPaslonController::detail/$1');
// $routes->get('/edit-paslon/(:any)', 'DataPaslonController::edit/$1');
// $routes->get('/delete-paslon/(:any)', 'DataPaslonController::delete/$1');

// $routes->get('/data-pemilih', 'DataPemilihController::index', ['filter' => 'loginfilter']);
// $routes->get('/edit-akun/(:any)', 'DataPemilihController::edit/$1');
// $routes->get('/delete-pemilih/(:any)', 'DataPemilihController::delete/$1');
// $routes->post('/tambahakun', 'DataPemilihController::tambahakun');
// $routes->post('/update-akun/(:any)', 'DataPemilihController::updateakun/$1');

// $routes->get('/riwayat-pemilihan', 'RiwayatPemilihanController::index', ['filter' => 'loginfilter']);
// $routes->get('/hasil-pemilihan', 'HasilPemilihanController::index', ['filter' => 'loginfilter']);

// $routes->get('/data-siswa', 'SiswaController::index');
// $routes->get('/edit-siswa/(:any)', 'SiswaController::edit/$1');
// $routes->post('/update-siswa/(:any)', 'SiswaController::updatesiswa/$1');
// $routes->get('/delete-siswa/(:any)', 'SiswaController::delete/$1');



/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
