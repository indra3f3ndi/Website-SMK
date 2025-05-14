<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomePage::index');
$routes->get('/profile', 'HomePage::profile');
$routes->get('/portofolio', 'HomePage::portofolio');


// Auth
$routes->get('/login', 'Auth::login');
// Auth

// Admin routes
$routes->get('/admin', 'Admin::homeadmin');

// Pegawai
$routes->get('/admin/pegawai', 'Admin::adminpegawai');
$routes->get('/admin/pegawai/tambahpegawai', 'Admin::tambahdatapegawai');
$routes->post('/admin/pegawai/tambahpegawai', 'Admin::tambahpegawai');
$routes->get('/admin/pegawai/delete(:num)', 'Admin::deletePegawai/$1');

$routes->get('/admin/pegawai/update(:num)', 'Admin::updatedatapegawai/$1');
$routes->post('/admin/pegawai/updatepegawai/(:num)', 'Admin::updatePegawai/$1');
$routes->get('/admin/pegawai/viewpegawai', 'Admin::viewpwgawai');
$routes->get('/admin/pegawai/search', 'Admin::searchpegawai');

// Pegawai

// Guru
$routes->get('/admin/guru', 'Admin::adminguru');
$routes->get('/admin/guru/tambahguru', 'Admin::tambahdataguru');
$routes->post('/admin/guru/tambahguru', 'Admin::tambahguru');
$routes->get('/admin/guru/delete(:num)', 'Admin::deleteGuru/$1');

$routes->get('/admin/guru/updatedata(:num)', 'Admin::updatedataguru1/$1');
$routes->post('/admin/guru/updateguru(:num)', 'Admin::updatedataguru/$1');

$routes->get('/admin/pegawai/viewpegawai', 'Admin::viewpwgawai');
$routes->get('/admin/guru/search', 'Admin::searchguru');

// Siswa
$routes->get('/admin/siswa', 'Admin::adminsiswa');
$routes->get('/admin/siswa/tambahsiswa', 'Admin::tambahdatasiswa');
$routes->post('/admin/siswa/tambahsiswa', 'Admin::tambahsiswa');
$routes->get('/admin/siswa/delete(:num)', 'Admin::deleteSiswa/$1');

$routes->get('/siswa', 'Siswa::viewSiswa');

$routes->get('/siswa/update(:num)', 'Admin::updatedatasiswa1/$1');
$routes->post('/siswa/update(:num)', 'Admin::updatedatasiswa/$1');

$routes->post('/siswa/tambah', 'Siswa::tambahSiswa');
$routes->get('/siswa/delete/(:num)', 'Siswa::deleteSiswa/$1');
$routes->get('/siswa/search', 'Siswa::searchSiswa');


$routes->get('/admin/pegawai/viewpegawai', 'Admin::viewpwgawai');
$routes->get('/admin/siswa/search', 'Admin::searchsiswa');

// Siswa

// Data Tamu 
$routes->get('/admin/tamu', 'Admin::admintamu');
$routes->get('/admin/tamu/tambahtamu', 'Admin::tambahdatatamu');
$routes->post('/admin/tamu/tambahtamu', 'Admin::tambahtamu');
$routes->get('/admin/tamu/delete(:num)', 'Admin::deleteTamu/$1');

$routes->get('/tamu', 'Siswa::viewtamu');

$routes->get('/tamu/update(:num)', 'Admin::updatedatatamu1/$1');
$routes->post('/tamu/update(:num)', 'Admin::updatedatatamu/$1');

$routes->post('/tamu/tambah', 'tamu::tambahTamu');
$routes->get('/tamu/delete/(:num)', 'tamu::deletetamu/$1');
$routes->get('/tamu/search', 'Siswa::searchtamu');


$routes->get('/admin/pegawai/viewpegawai', 'Admin::viewpwgawai');
$routes->get('/admin/tamu/search', 'Admin::searchtamu');


//login
$routes->get('/login', 'Auth::login');
$routes->post('/auth/process', 'Auth::process');
$routes->get('/auth/logout', 'Auth::logout');

//kegiatan
// Data kegiatan
$routes->get('/admin/kegiatan', 'Admin::adminkegiatan');
$routes->get('/admin/kegiatan/tambahkegiatan', 'Admin::tambahdatakegiatan');
$routes->post('/admin/kegiatan/tambahkegiatan', 'Admin::tambahkegiatan');

$routes->get('/kegiatan', 'Siswa::viewkegiatan');

$routes->get('/kegiatan/update(:num)', 'Admin::updatedatakegiatan1/$1');
$routes->post('/kegiatan/update(:num)', 'Admin::updatedatakegiatan/$1');

$routes->post('/kegiatan/tambah', 'kegiatan::tambahkegiatan');
$routes->get('/kegiatan/delete/(:num)', 'Admin::deletekegiatan/$1');
$routes->get('/kegiatan/search', 'Siswa::searchkegiatan');


$routes->get('/admin/pegawai/viewpegawai', 'Admin::viewpegawai');
$routes->get('/admin/kegiatan/search', 'Admin::searchkegiatan');


//login
$routes->get('/login', 'Auth::login');
$routes->post('/auth/process', 'Auth::process');
$routes->get('/auth/logout', 'Auth::logout');

// dompdf
$routes->get('/report', 'ReportController::index');
