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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware'=> 'admin'], function() {
Route::get('/administrator', 'AdministratorController@index')->name('administrator');
Route::post('/reset', 'AdministratorController@reset')->name('reset.nomor');
Route::get('/rekap', 'Rekap@index')->name('rekap');
Route::get('/rekap/bulanan', 'Rekap@bulanan')->name('rekap.bulanan');
Route::post('/rekap/bulanan', 'Rekap@lihatbulanan')->name('rekap.lihat.bulanan');
Route::post('/rekap', 'Rekap@lihat')->name('rekap.lihat');
});

Route::post('/home/antrian', 'HomeController@antrian')->name('antrian');
