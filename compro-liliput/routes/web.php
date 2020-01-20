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
Route::get('/ahli', 'CompanyProfile@ahli');

//register
Route::get('/daftar', 'CompanyProfile@Regist');
Route::post('/daftar_proses','CompanyProfile@DaftarPasien');

//request
Route::post('/request_kuisioner', 'CompanyProfile@requestKuisioner');
Route::post('/asses_baru', 'CompanyProfile@assesBaru');

//artikel
Route::get('/artikel/{id}', 'CompanyProfile@artikel');

//kuisioner
Route::get('/kuisioner_umum', 'CompanyProfile@Kuisioner');
Route::post('/kirim_kuisioner','CompanyProfile@sendKuisioner');

//reset
Route::get('/reset_password', 'CompanyProfile@Reset');
Route::post('/reset', 'CompanyProfile@resetPassword');

//login
Route::get('/login', 'CompanyProfile@Login');
Route::get('/logout', 'LoginController@logout');
Route::post('/login_proses', 'LoginController@login');
