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
    return view('login.login');
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

//Mahasiswa controller
route::put('/mahasiswa/update/{id}','MahasiswaController@update');

//Controller Login
route::get('/login1','LoginController@index');
route::post('/login2','LoginController@login');
route::get('/logout','LoginController@logout');

//Controller SosMed
route::get('/sosmed','SosMedController@index')->name('sosmed')->middleware('dsnmid');
route::post('/testcreate','SosMedController@store');
route::post('/testkomen','SosMedController@komen');
route::get('/sosmed/userfeed','SosMedController@UserFeed');
route::get('/sosmed/pengumuman','SosMedController@pengumuman');
route::get('/sosmed/ukm','SosMedController@ukm');
route::post('/sosmed/like','SosMedController@like');



//Controller Chat
route::get('/chat','chatController@index');
route::get('/chat_kelas/{id}','chat_isicontroller@isi');
route::get('/tambah_anggota/{id}','kls_anggotacontroller@indextambah');
route::get('/add_toclass/{id}/{idkls}','kls_anggotacontroller@store');
route::post('/send','chat_isicontroller@store');



//controller tambahkelas

route::get('/Tambah-kelas/{id}','kelascontroller@index');
route::post('addkelas','kelascontroller@storekelas');

//controller materi
route::get('/materi/{id}','matericontroller@index');
route::get('/add_materi/{id}','matericontroller@indexadd');
route::post('/upload_file','matericontroller@store');

//TUGAS
route::get('/tugas/{id}','tugascontroller@index');
route::get('/add_tugas/{id}','tugascontroller@indexadd');
route::post('/upload_tugas','tugascontroller@store');
route::get('/jawab_tugas/{id}','tugascontroller@indexjawab');
route::post('/jawab','tugascontroller@storejawaban');
route::get('/data_tugas/{id}','tugascontroller@showdata');
