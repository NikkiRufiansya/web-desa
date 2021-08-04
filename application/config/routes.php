<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
//route landing page
$route['default_controller'] = 'HomeController';
$route['kabar_desa'] = 'KabarDesaController';
$route['kabar_desa/(:num)'] = 'KabarDesaController/index/$1';
$route['baca_informasi'] = 'KabarDesaController/bacaInformasi';
$route['tentang_desa'] = 'TentangDesaController';
$route['home_penduduk'] = 'PendudukController';
$route['galeri'] = 'GaleriController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['admin'] = 'admin/AdminController';
$route['auth'] = 'admin/AuthController';
$route['logout'] = 'admin/AuthController/logout';

//route admin penduduk
$route['penduduk'] = 'admin/PendudukController';
$route['tambah_penduduk'] = 'admin/PendudukController/tambahPenduduk';
$route['proses_tambah_penduduk'] = 'admin/PendudukController/prosesTambahPenduduk';
$route['ubah_penduduk/(:num)'] = 'admin/PendudukController/ubahPenduduk/$1';
$route['proses_ubah_penduduk'] = 'admin/PendudukController/prosesUbahPenduduk';
$route['hapus_penduduk/(:num)'] = 'admin/PendudukController/hapusPenduduk/$1';


//route admin kabar desa
$route['admin_kabar_desa'] = 'admin/KabarDesaController';
$route['tambah_informasi'] = 'admin/KabarDesaController/tambahInformasi';
$route['proses_tambah_informasi'] = 'admin/KabarDesaController/prosesTambahInformasi';
$route['hapus_informasi/(:num)'] = 'admin/KabarDesaController/hapusInformasi/$1';
$route['ubah_informasi/(:num)'] = 'admin/KabarDesaController/ubahInformasi/$1';
$route['proses_ubah_informasi'] = 'admin/KabarDesaController/prosesUbahInformasi';


//route admin tentang desa
$route['admin_tentang_desa'] = 'admin/TentangDesaController';
$route['ubah_tentang_desa/(:num)'] = 'admin/TentangDesaController/ubahData/$1';
$route['proses_ubah_tentang_desa'] = 'admin/TentangDesaController/prosesUbahData';


//route admin galeri
$route['admin_galeri'] = 'admin/GaleriController';
$route['tambah_galeri'] = 'admin/GaleriController/tambahGaleri';
$route['proses_tambah_galeri'] = 'admin/GaleriController/prosesTambahGaleri';
$route['ubah_galeri/(:num)'] = 'admin/GaleriController/ubahGaleri/$1';
$route['proses_ubah_galeri'] = 'admin/GaleriController/prosesUbahGaleri';
$route['hapus_galeri/(:num)'] = 'admin/GaleriController/hapusGaleri/$1';


//route admin staff desa
$route['admin_staf_desa'] = 'admin/StaffController';
$route['tambah_staff'] = 'admin/StaffController/tambahStaff';
$route['proses_tambah_staff'] = 'admin/StaffController/prosesTambahStaff';
$route['ubah_staff/(:num)'] = 'admin/StaffController/ubahStaff/$1';
$route['proses_ubah_staff'] = 'admin/StaffController/prosesUbahStaff';
$route['hapus_staff/(:num)'] = 'admin/StaffController/hapusStaff/$1';
$route['lihat_admin'] = 'admin/StaffController/lihatAdmin';
$route['tambah_admin'] = 'admin/StaffController/tambahAdmin';
$route['proses_tambah_admin'] = 'admin/StaffController/prosesTambahAdmin';
$route['ubah_admin/(:num)'] = 'admin/StaffController/ubahAdmin/$1';
$route['proses_ubah_admin'] = 'admin/StaffController/prosesUbahAdmin';
$route['hapus_admin/(:num)'] = 'admin/StaffController/hapusAdmin/$1';



