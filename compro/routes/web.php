<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'CompanyProfile@index');
Route::get('/isi', 'CompanyProfile@indexx');

//login
Route::get('/log', 'CompanyProfile@Login');
Route::get('/logout', 'LoginController@logout');
Route::post('/logg', 'LoginController@loginn');

//register
Route::get('/reg', 'CompanyProfile@Regist');
Route::resource('/daftar','daftarpasien');

//reset
Route::get('/reset', 'CompanyProfile@Reset');
Route::post('/resett', 'CompanyProfile@resett');

//artikel
Route::get('/one', 'Controller@satu');
Route::get('/two', 'Controller@dua');
Route::get('/three', 'Controller@tiga');
Route::get('/four', 'Controller@empat');
Route::get('/five', 'Controller@lima');
Route::get('/six', 'Controller@enam');

//new assessment
Route::post('/assesnew', 'CompanyProfile@assesnew');

//kuesioner
Route::get('/pass', 'CompanyProfile@Umum');
Route::resource('/umum','kuesiumum');
//req download kuesioner
Route::post('/reqdownload', 'CompanyProfile@reqdownload');

//email
//Route::get('/mail', 'Controller@maill');
//Route::post('/daftar', 'CompanyProfile@kirim');
//Route::get('/konfirm/{id}', 'CompanyProfile@konfirmasi');
//Route::post('/submit', 'CompanyProfile@submit');
?>