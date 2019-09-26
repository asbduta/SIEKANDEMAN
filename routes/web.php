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

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/coba', function () {
   // return view('app/ManagementGuru/update');
//});
Route::get('/index', function () {

    return view('app/index');
});

// Route::resource('managementguru','ManagementGuruController');

// -------------------MANAGEMENT GURU ROUTE ----------------------------//
Route::get('/managementguru','ManagementGuruController@index');
Route::get('/managementguru-create','ManagementGuruController@create');
Route::post('/managementguru.store','ManagementGuruController@store');
Route::get('/managementguru-del/{id}','ManagementGuruController@destroy');
Route::get('/managementguru-edit/{id}','ManagementGuruController@edit');
//---------------MANAGEMENT SISWA ROUTE--------------------------------------//
Route::get('/managementsiswa','ManagementSiswaController@index');
Route::get('/managementsiswa-create','ManagementSiswaController@create');
Route::get('/managementsiswa-edit','ManagementSiswaController@edit');