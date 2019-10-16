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
        return view('depan');
})->name('depan');
//tambah route
Route::get('/masuk', function () {
        return view('statis.login');
})->name('masuk');
Route::get('/daftar', function () {
        return view('statis.daftar');
})->name('daftar');
Route::get('/logout', 'Auth\LoginController@logout');

Auth::routes();

Route::get('/dashboard/user', 'HomeController@dashboard')
        ->middleware('auth')
        ->name('dashboard.user');

Route::get('/home', 'HomeController@index')
        ->middleware('auth')
        ->name('home');

//PENGADUAN
Route::get('/tiket', 'Pengaduan@formPengaduan')
        ->middleware('auth')
        ->name('tiket.index');

Route::post('/pengaduan/create', 'Pengaduan@createPengaduan')
        ->middleware('auth')
        ->name('pengaduan.create');

Route::get('/pengaduan/form', 'Pengaduan@formPengaduan')
        ->middleware('auth')
        ->name('pengaduan.form');

Route::get('/pengaduan/detaillaporan', 'HomeController@detailLaporan')
        ->middleware('auth')
        ->name('pengaduan.detail');

Route::get('/pengaduan/detail/{id}', 'Pengaduan@getDataPengaduan')
        ->middleware('auth')
        ->name('pengaduan.detail.id');

Route::post('/pengaduan/detail/edit', 'Pengaduan@editPengaduan')
        ->middleware('auth')
        ->name('pengaduan.edit');
//END PENGADUAN

//PERCAKAPAN
Route::get('/percakapan/{id}', 'Percakapan@lihatPercakapan')
        ->middleware('auth')
        ->name('percakapan.lihatpercakapan');

Route::get('/percakapan/tambahpesan/{id}', 'Percakapan@viewTambahPesan')
        ->middleware('auth')
        ->name('percakapan.tambahpesan');

Route::post('/percakapan/prosestambahpesan', 'Percakapan@tambahPesan')
        ->middleware('auth')
        ->name('percakapan.prosestambahpesan');
//END PERCAKAPAN

//===================
//ADMINISTRATOR
//===================
Route::get('/dashboard/admin', 'Administrator@dashboard')
        ->middleware('isAdmin')
        ->name('dashboard.admin');
Route::get('/administrator/detaillaporan', 'Administrator@admDetailLaporan')
        ->middleware('isAdmin')
        ->name('administrator.detail');

Route::get('/administrator/dashboard', 'Administrator@admDashboard')
        ->middleware('isAdmin')
        ->name('administrator.dashboard');

Route::get('/administrator/hapuspengaduan/{id}', 'Administrator@hapusPengaduan')
        ->middleware('isAdmin')
        ->name('administrator.hapuspengaduan');

Route::get('/administator/downlowdbuktipengaduan/{id}', 'Administrator@downloadBukti')
        ->middleware('auth')
        ->name('administrator.downbukti');

Route::get('/administator/downlowdba/{id}', 'Administrator@downloadBATindaklanjut')
        ->middleware('auth')
        ->name('administrator.downba');

Route::get('/administator/viewupdatepengaduan/{id}', 'Administrator@viewUpdatePengaduan')
        ->middleware('isAdmin')
        ->name('administrator.viewadmupdate');

Route::post('/administator/updatepengaduan', 'Administrator@updatePengaduan')
        ->middleware('isAdmin')
        ->name('administrator.admupdate');

//===================
//END ADMINISTRATOR
//===================
