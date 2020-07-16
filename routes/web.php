<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// PESERTA
Route::get('/register', 'PesertaController@create')->name('register-peserta');
Route::get('/login', 'PesertaController@formLogin')->name('login-peserta');
Route::post('/store-login', 'PesertaController@login')->name('store-login');
Route::post('/store-register', 'PesertaController@store')->name('store-register');
Route::group(['middleware' => 'peserta'], function () {
	Route::get('/dashboard', 'PesertaController@index')->name('dashboard-peserta');
	Route::get('/pendaftaran', 'HalamanPendaftaranController@create')->name('pendaftaran-usaha');
	Route::post('/store-profile-usaha', 'HalamanPendaftaranController@profileUsaha')->name('profile-usaha');
	Route::post('/store-profile-akun', 'HalamanPendaftaranController@profileAkun')->name('profile-akun-daftar');
	Route::get('/isi-laporan', 'MenuWirausahaController@isiLaporan')->name('isi-laporan');
	Route::get('/profile', 'MenuWirausahaController@index')->name('profile-akun');
	Route::get('/riwayat-laporan', 'MenuWirausahaController@index')->name('riwayat-laporan');
	Route::get('/konsultasi', 'MenuWirausahaController@index')->name('konsultasi');
	Route::get('/akses-modal', 'MenuWirausahaController@index')->name('akses-modal');
	Route::get('/akses-pasar', 'MenuWirausahaController@index')->name('akses-ecommerce');
	Route::get('/video-materi-berwirausaha', 'MenuWirausahaController@index')->name('video-berwirausaha');
	// Route::get('/grafik', 'MenuWirausahaController@index')->name('grafik');
	Route::get('/edit', 'PesertaController@edit')->name('edit-peserta');
	Route::get('/logout-peserta', 'PesertaController@logout')->name('logout-peserta');
});


// ADMIN
route::group(['prefix' => 'admin'], function () {
	Auth::routes();

	Route::get('/home', 'HomeController@index')->name('home');
	Auth::routes();

	Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

	Route::group(['middleware' => 'auth'], function () {
		Route::get('table-list', function () {
			return view('pages.table_list');
		})->name('table');

		Route::get('typography', function () {
			return view('pages.typography');
		})->name('typography');

		Route::get('icons', function () {
			return view('pages.icons');
		})->name('icons');

		Route::get('map', function () {
			return view('pages.map');
		})->name('map');

		Route::get('notifications', function () {
			return view('pages.notifications');
		})->name('notifications');

		Route::get('rtl-support', function () {
			return view('pages.language');
		})->name('language');

		Route::get('upgrade', function () {
			return view('pages.upgrade');
		})->name('upgrade');
	});

	Route::group(['middleware' => 'auth'], function () {
		Route::resource('user', 'UserController', ['except' => ['show']]);
		Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
		Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
		Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
	});
});
