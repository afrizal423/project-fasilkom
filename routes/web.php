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
  return view('public/landing');
});

Route::get('/prestasi', function() {
  return view('public/prestasi');
});
Route::group(['middleware' => ['web']], function () {
    Auth::routes();
    Route::match(['get', 'post'], '/register', function () {
        return redirect("/login");
    });
    Route::get('/dashboard/admin', 'AdminController@index')->name('admin');

    //Route::get('/dashboard/admin/mahasiswa', 'MahasiswaController@index')->name('mahasiswa');

    Route::resource("/dashboard/admin/mahasiswa", "MahasiswaController");

    Route::resource("/dashboard/admin/mahasiswa/ta", "TugasakhirController");

    Route::resource("/dashboard/admin/mahasiswa/prestasi", "PrestasiController");

    Route::resource("/dashboard/admin/berita", "BeritaController");

    Route::resource("/dashboard/admin/event", "EventController");

    Route::resource("/dashboard/admin/pengumuman", "PengumumanController");

    Route::resource("/dashboard/admin/alumni", "AlumniController");







    Route::get('/home', 'HomeController@index')->name('home');
});
