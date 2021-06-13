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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(
    ['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['auth']],
    function () {
        Route::get('dashbsoard', 'DashboardController@index');

        Route::get('admin', function () {
            return view('layout');
        })->middleware('checkRole:admin');
        Route::get('user', function () {
            return view('home');
        })->middleware(['checkRole:user, admin']);
    }
);

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('pengambilankeputusan', 'PengambilankeputusanController@index')->name('pengambilankeputusan');
Route::get('histori', 'HistoriController@index');
Route::get('sparepart', 'SparepartController@index');
Route::get('/sparepart/hapus/{id}', 'SparepartController@hapus');
Route::get('sparepart/tambah', 'SparepartController@tambah');
Route::get('formtambah', 'FormtambahController@index');
Route::get('profile', 'ProfileController@index')->name('profile');
Route::get('profile/edit', 'ProfileController@edit')->name('profile.edit');
