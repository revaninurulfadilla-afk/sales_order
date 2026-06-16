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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'auth';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Auth
$route['login']              = 'auth/index';
$route['login/proses']       = 'auth/login';
$route['auth/logout']        = 'auth/logout';

// Dashboard
$route['dashboard']          = 'dashboard/index';

// Produk
$route['produk']             = 'produk/index';
$route['produk/tambah']      = 'produk/tambah';
$route['produk/simpan']      = 'produk/simpan';
$route['produk/edit/(:num)'] = 'produk/edit/$1';
$route['produk/update/(:num)'] = 'produk/update/$1';
$route['produk/hapus/(:num)'] = 'produk/hapus/$1';

// Pelanggan
$route['pelanggan']               = 'pelanggan/index';
$route['pelanggan/tambah']        = 'pelanggan/tambah';
$route['pelanggan/simpan']        = 'pelanggan/simpan';
$route['pelanggan/edit/(:num)']   = 'pelanggan/edit/$1';
$route['pelanggan/update/(:num)'] = 'pelanggan/update/$1';
$route['pelanggan/hapus/(:num)']  = 'pelanggan/hapus/$1';

// Sales
$route['sales']               = 'sales/index';
$route['sales/tambah']        = 'sales/tambah';
$route['sales/simpan']        = 'sales/simpan';
$route['sales/edit/(:num)']   = 'sales/edit/$1';
$route['sales/update/(:num)'] = 'sales/update/$1';
$route['sales/hapus/(:num)']  = 'sales/hapus/$1';

// Sales Order
$route['sales_order']                    = 'sales_order/index';
$route['sales_order/tambah']             = 'sales_order/tambah';
$route['sales_order/simpan']             = 'sales_order/simpan';
$route['sales_order/detail/(:num)']      = 'sales_order/detail/$1';
$route['sales_order/edit/(:num)']        = 'sales_order/edit/$1';
$route['sales_order/update/(:num)']      = 'sales_order/update/$1';
$route['sales_order/hapus/(:num)']       = 'sales_order/hapus/$1';
$route['sales_order/ubah_status/(:num)'] = 'sales_order/ubah_status/$1';
$route['sales_order/get_produk/(:num)']  = 'sales_order/get_produk/$1';

// Laporan
$route['laporan']             = 'laporan/index';
$route['laporan/penjualan']   = 'laporan/penjualan';
$route['laporan/sales']       = 'laporan/per_sales';
$route['laporan/produk']      = 'laporan/per_produk';
$route['laporan/export_pdf']  = 'laporan/export_pdf';
$route['laporan/export_sales_pdf']   = 'laporan/export_sales_pdf';
$route['laporan/export_produk_pdf']  = 'laporan/export_produk_pdf';

// Users
$route['users']               = 'users/index';
$route['users/tambah']        = 'users/tambah';
$route['users/simpan']        = 'users/simpan';
$route['users/edit/(:num)']   = 'users/edit/$1';
$route['users/update/(:num)'] = 'users/update/$1';
$route['users/hapus/(:num)']  = 'users/hapus/$1';

// Profile
$route['profile']             = 'users/profile';
$route['profile/update']      = 'users/update_profile';
