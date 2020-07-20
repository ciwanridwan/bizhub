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
	return view('home-page');
});

// PESERTA

Route::get('/api/kota/', 'HalamanPendaftaranController@getKota');
Route::get('/api/kecamatan/', 'HalamanPendaftaranController@getKecamatan');
Route::get('/register', 'PesertaController@create')->name('register-peserta');
Route::get('/login', 'PesertaController@formLogin')->name('login-peserta');
Route::post('/store-login', 'PesertaController@login')->name('store-login');
Route::post('/store-register', 'PesertaController@store')->name('store-register');
Route::group(['middleware' => 'peserta'], function () {
	Route::get('/dashboard', 'PesertaController@index')->name('dashboard-peserta');
	Route::get('/pendaftaran', 'HalamanPendaftaranController@create')->name('pendaftaran-usaha');
	Route::get('/pendaftaran-profile', 'HalamanPendaftaranController@index')->name('pendaftaran-profile');
	Route::post('/store-profile-usaha', 'HalamanPendaftaranController@profileUsaha')->name('profile-usaha');
	Route::post('/store-profile-akun', 'HalamanPendaftaranController@profileAkun')->name('profile-akun-daftar');
	Route::get('/isi-kuesioner', 'MenuWirausahaController@isiLaporan')->name('isi-laporan');
	Route::post('/store-kuesioner', 'MenuWirausahaController@storeKuesioner')->name('store-kuesioner');
	Route::get('/profile', 'MenuWirausahaController@index')->name('profile-akun');
	Route::get('/riwayat-laporan', 'MenuWirausahaController@riwayatLaporan')->name('riwayat-laporan');
	Route::get('/konsultasi', 'MenuWirausahaController@konsultasi')->name('konsultasi');
	Route::get('/akses-modal', 'MenuWirausahaController@aksesModal')->name('akses-modal');
	Route::get('/akses-pasar', 'MenuWirausahaController@aksesPasar')->name('akses-ecommerce');
	Route::get('/video-materi-berwirausaha', 'MenuWirausahaController@videoWirausaha')->name('video-berwirausaha');
	// Route::get('/grafik', 'MenuWirausahaController@index')->name('grafik');
	Route::post('/update-profile', 'PesertaController@update')->name('update-profile');
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

		Route::get('/kontak-kami', 'AdminController@kontakKami')->name('kontak-kami');
		Route::get('/kontak/edit/{id}', 'AdminController@editKontak')->name('edit-kontak');
		Route::post('/update-kontak', 'AdminController@updateKontak')->name('update-kontak');

		Route::get('/slider', 'AdminController@slider')->name('slider');
		Route::get('/slider/edit/{id}', 'AdminController@editSlider')->name('edit-slider');
		Route::post('/update-slider', 'AdminController@updateSlider')->name('update-slider');

		Route::get('/mitra-kami', 'AdminController@mitraKami')->name('mitra-kami');
		Route::get('/mitra/edit/{id}', 'AdminController@editMitra')->name('edit-mitra');
		Route::post('/update-mitra', 'AdminController@updateMitra')->name('update-mitra');
		Route::get('/kuesioner/export-excell', 'KuesionerController@exportExcell')->name('export-excell');

		Route::group(['prefix' => 'formulir'], function () {
			Route::get('/profile-usaha', 'FormulirKuesionerController@profileUsaha')->name('formulir-profile-usaha');
			Route::get('/profile-pemilik', 'FormulirKuesionerController@profilePemilik')->name('formulir-profile-pemilik');
			Route::get('/kuesioner', 'FormulirKuesionerController@createKuesioner')->name('kuesioner');
		});

		Route::group(['prefix' => 'wirausaha'], function (){
			Route::get('/terverifikasi', 'AdminController@wirausahaTerverifikasi')->name('terverifikasi');
			Route::get('/belum-tervirifikasi', 'AdminController@wirausahaBelumTerverifikasi')->name('belum-terverifikasi');
			Route::post('/update-verifikasi/{id}', 'AdminController@updateVerifikasi')->name('update-verifikasi');
			Route::get('/berdasarkan-skala', 'AdminController@wirausahaBerdasarkanSkala')->name('skala');
		});
	});

	Route::group(['middleware' => 'auth'], function () {
		Route::resource('user', 'UserController', ['except' => ['show']]);
		Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
		Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
		Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
	});
});
