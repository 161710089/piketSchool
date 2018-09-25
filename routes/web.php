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


Route::get('/LoginMember', 'AuthController@getLogin');
Route::post('/LoginMember', 'AuthController@postLogin')->name('loginMember');
Route::get('/RegisterMember', 'AuthController@getRegister');
// Route::post('/RegisterMember', 'AuthController@postRegister')->name('registerMember');
Route::get('/regis', 'SiswaController@create');
Route::post('/RegisterMember', 'SiswaController@creat')->name('registerMember');



Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});


Auth::routes();

// Route::group(['prefix'=>'member' ,'middleware'=>['auth','role:member']], 
// 	function (){
// Route::get('/',function(){
// 		return view('member.index');
// 	});
// Route::get('/absen', 'AbsensiSiswaController@absen')->name('absen');
// Route::get('/absenGuru', 'AbsensiGuruController@absen');

// Route::get('/siswa', 'SiswaController@siswa');
// Route::get('/index', 'AbsensiSiswaController@index');
// Route::get('/index', 'AbsensiSiswaController@index');
// Route::get('Rekap','RekapController@index3');
// Route::post('/laporanabsensi' , 'AbsensiSiswaController@absen')->name('laporanabsensi');

// });

Route::group(['prefix'=>'admin' ,'middleware'=>['auth','role:admin']], 
	function (){

Route::get('/',function(){
		return view('admin.index');
	});

// Route::post('/RegisterMember', 'SiswaController@create')->name('RegisterMember');
Route::resource('PetugasPiket','PetugasPiketController');
Route::resource('siswa','SiswaController');
Route::resource('guru','GuruController');
Route::resource('kelas','KelasController');
Route::resource('jurusan','jurusanController');
Route::resource('user','userController');


	});


Route::group(['prefix'=>'petugaspiket' ,'middleware'=>['auth','role:petugas']], 
	function (){

Route::get('/',function(){
		return view('admin.index');
	});
Route::resource('absensi_siswa','AbsensiSiswaController');
Route::resource('absensi_guru','AbsensiGuruController');
Route::resource('Rekap','RekapController');
Route::get('Rekapguru','RekapController@index3')->name('Rekapguru');

Route::post('/laporanabsensi' , 'RekapController@index2')->name('laporanabsensi');
Route::post('/laporanabsensiguru' , 'RekapController@index4')->name('laporanabsensiguru');

Route::get('/filter/kelas/{id}', 'AbsensiSiswaController@filter');
Route::get('/filter/user/{id}', 'AbsensiSiswaController@filterUser');
Route::get('/filter/userGuru/{id}', 'AbsensiGuruController@filterUser');

Route::get('/', function () {
    return view('welcome');


	});


});

Route::group(['prefix'=>'siswa' ,'middleware'=>['auth','role:siswa']], 
	function (){
Route::get('/',function(){
		return view('member.index');
	});
Route::get('/absen', 'AbsensiSiswaController@absen')->name('absen');

Route::get('/siswa', 'SiswaController@siswa');
Route::get('/index', 'AbsensiSiswaController@index');
Route::get('/index', 'AbsensiSiswaController@index');
Route::get('Rekap','RekapController@index3');

});

Route::group(['prefix'=>'guru' ,'middleware'=>['auth','role:guru']], 
	function (){
Route::get('/',function(){
		return view('member.index');
	});
Route::get('/absenGuru', 'AbsensiGuruController@absen')->name('absenGuru');

Route::get('/siswa', 'SiswaController@siswa');
Route::get('/index', 'AbsensiSiswaController@index');
Route::get('Rekap','RekapController@index3');
;

});

// Templates
Auth::routes();

