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

Route::resource('new','CRUDcontroller');
Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

//Dosen Controller
Route::get('dosen','DosenController@index');
route::get('/dosen/create','DosenController@create');
route::post('/dosen/store','DosenController@store');
route::get('/dosen/edit/{id}','DosenController@edit');
route::put('/dosen/update/{id}','DosenController@update');
Route::get('/dosen/hapus/{id}', 'DosenController@destroy');


//Controller beta
route::get('/gc','pageController@index');
route::get('/test','pageController@test');
route::post('/testcreate','SosMedController@store');
