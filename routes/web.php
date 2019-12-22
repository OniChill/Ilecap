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

// Route::get('/home', function() {
//     return view('home');
// })->name('home')->middleware('auth');

//Dosen Controller
Route::get('dosen','DosenController@index');
route::get('/dosen/create','DosenController@create');
route::post('/dosen/store','DosenController@store');
route::get('/dosen/edit/{id}','DosenController@edit');
route::put('/dosen/update/{id}','DosenController@update');
Route::get('/dosen/hapus/{id}', 'DosenController@destroy');
Route::get('/dosen/cari', 'DosenController@cari');

//Controller Login
route::get('/login1','LoginController@index');
route::post('/login2','LoginController@login');
route::get('/logout','LoginController@logout');

//Controller SosMed
route::get('/sosmed','SosMedController@index')->name('sosmed')->middleware('dsnmid');
route::post('/testcreate','SosMedController@store');
route::post('/testkomen','SosMedController@komen');
route::get('/userfeed','SosMedController@UserFeed');


