<?php

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
    return view('home');
}); 

Route::get('/home','AuthController@home');
Route::get('/login','AuthController@login')->name('home');
Route::get('/tkj','AuthController@tkj');
Route::get('/mm','AuthController@mm');
Route::get('/profile','AuthController@profile');
Route::get('/profile2','AuthController@profile2');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');

Route::group(['middleware' => ['auth','CheckRole:admin']],function()
{
Route::get('/dashboard','DashboardController@index');
Route::get('/profile/{id}','DashboardController@profile');
Route::get('/edit/{id}','DashboardController@edit');
Route::post('/edit/{id}/update','DashboardController@update');
Route::get('/edit/{id}/close','DashboardController@close');

Route::get('/siswa','SiswaController@index');
Route::post('/siswa/create','SiswaController@create');
Route::get('/siswa/{id}/edit','SiswaController@edit');
Route::post('/siswa/{id}/update','SiswaController@update');
Route::get('/siswa/{id}/delete','SiswaController@delete');
Route::get('/siswa/{id}/close','SiswaController@close');
Route::get('/siswa/{id}/profile','SiswaController@profile');

Route::get('/walikelas','WalikelasController@index3');
Route::post('/walikelas/create','WalikelasController@create');
Route::get('/walikelas/{id}/edit','WalikelasController@edit');
Route::get('/walikelas/{id}/profile','WalikelasController@profile');
Route::get('/walikelas/{id}/close','WalikelasController@close');
Route::post('/walikelas/{id}/update','WalikelasController@update');
Route::get('/walikelas/{id}/delete','WalikelasController@delete');

Route::get('/mapel','MapelController@mapel');
Route::post('/mapel/create','MapelController@create');
Route::get('/mapel/{id}/delete','MapelController@delete');
Route::get('/mapel/{id}/close','MapelController@close');
Route::get('/mapel/{id}/edit','MapelController@edit');
Route::post('/mapel/{id}/update','MapelController@update');


Route::get('/kelas','KelasController@kelas');
Route::post('/kelas/create','KelasController@create');
Route::get('/kelas/{id}/delete','KelasController@delete');
Route::get('/kelas/{id}/close','KelasController@close');
Route::get('/kelas/{id}/edit','KelasController@edit');
Route::post('/kelas/{id}/update','KelasController@update');

Route::get('/kelas_siswa','kelasSiswaController@kelas_siswa');
Route::post('/kelas_siswa/create','kelasSiswaController@create');
Route::get('/kelas_siswa/{id}/delete','kelasSiswaController@delete');
Route::get('/kelas_siswa/{id}/close','kelasSiswaController@close');
Route::get('/kelas_siswa/{id}/edit','kelasSiswaController@edit');
Route::post('/kelas_siswa/{id}/update','kelasSiswaController@update');

Route::get('/nilai1','NilaiController@index');
Route::post('/nilai1/create','NilaiController@create'); 
Route::get('/nilai1/{id}/delete','NilaiController@delete');
Route::get('/nilai1/{id}/close','NilaiController@close');
Route::get('/inputNilai/{id}','NilaiController@inputNilai');

Route::get('/admin1','AdminController@index4');
Route::post('/admin1/create','AdminController@create');
Route::get('/admin1/{id}/edit','AdminController@edit');
Route::get('/admin1/{id}/profile','AdminController@profile');
Route::get('/admin1/{id}/close','AdminController@close');
Route::post('/admin1/{id}/update','AdminController@update');
Route::get('/admin1/{id}/delete','AdminController@delete');

Route::get('/kelas_mapel','kelasMapelController@index');
Route::post('/kelas_mapel/create','kelasMapelController@create');
Route::get('/kelas_mapel/{id}/delete','kelasMapelController@delete');
Route::get('/kelas_mapel/{id}/close','kelasMapelController@close');
Route::get('/kelas_mapel/{id}/edit','kelasMapelController@edit');
Route::post('/kelas_mapel/{id}/update','kelasMapelController@update');

Route::get('/kelas_semester', 'kelasSemesterController@index');


Route::get('/cetak','CetakController@index5');
Route::get('/cetak/siswa','CetakController@siswa');
Route::get('/cetak/{id}/pdf','CetakController@cetak_pdf');
Route::get('/lihatNilai/{id}','CetakController@lihatNilai');

Route::get('/bantuan','BantuanController@admin');
});

Route::group(['middleware' => ['auth','CheckRole:admin,walikelas']],function()
{
Route::get('/dashboard','DashboardController@index');
Route::get('/profile/{id}','DashboardController@profile');
Route::get('/edit/{id}','DashboardController@edit');
Route::post('/edit/{id}/update','DashboardController@update');
Route::get('/edit/{id}/close','DashboardController@close');

Route::get('/siswa','SiswaController@index');
Route::get('/dataSiswa','SiswaController@dataSiswa');
Route::post('/siswa/create','SiswaController@create');
Route::get('/siswa/{id}/edit','SiswaController@edit');
Route::post('/siswa/{id}/update','SiswaController@update');
Route::get('/siswa/{id}/delete','SiswaController@delete');
Route::get('/siswa/{id}/close','SiswaController@close');
Route::get('/siswa/{id}/profile','SiswaController@profile');



Route::get('/nilai1','NilaiController@index');
Route::post('/nilai1/create','NilaiController@create'); 	
Route::get('/nilai1/{id}/delete','NilaiController@delete');
Route::get('/nilai1/{id}/close','NilaiController@close');
Route::get('/inputNilai/{id}','NilaiController@inputNilai');

Route::get('/cetak','CetakController@index5');
Route::get('/lihatNilai/{id}','CetakController@lihatNilai');
Route::get('/cetak/siswa','CetakController@siswa');
Route::get('/cetak/{id}/pdf','CetakController@cetak_pdf');

Route::get('/bantuan','BantuanController@admin');
});


Route::group(['middleware' => ['auth','CheckRole:siswa,admin,walikelas']],function()
{
Route::get('/dashboard','DashboardController@index');
Route::get('/profile/{id}','DashboardController@profile');
Route::get('/edit/{id}','DashboardController@edit');
Route::post('/edit/{id}/update','DashboardController@update');
Route::get('/edit/{id}/close','DashboardController@close');

Route::get('/cetak','CetakController@index5');
Route::get('/lihatNilai/{id}','CetakController@lihatNilai');
Route::get('/cetak/{id}/pdf','CetakController@cetak_pdf');
});
