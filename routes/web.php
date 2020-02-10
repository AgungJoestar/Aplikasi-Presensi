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
    return view('/company/base');
});
// Route::get('/test', 'PagesController@index'); // localhost:8000/
// Route::get('/absensiswasekolah/getUsers/{id}','AbsensiSiswaSekolahController@getUsers');

Route::get('/login', 'AuthController@getLogin')->middleware('guest')->name('login');
Route::post('/login', 'AuthController@postLogin')->middleware('guest');
Route::get('/register', 'AuthController@getRegister')->middleware('guest')->name('register');
Route::post('/register', 'AuthController@postRegister')->middleware('guest');

Route::get('/home', function () {
    return view('/admin/home');
})->middleware('auth')->name('home');


Route::get('/logout','AuthController@logout')->middleware('auth')->name('logout');



Route::get('/admin', 'DashboardController@index')->middleware('auth')->name('admin');
Route::get('/admin/create', 'DashboardController@create')->middleware('auth')->name('admin/create');
Route::post('/admin/create', 'DashboardController@store');
Route::get('/admin/hapus/{users}','DashboardController@hapus');
Route::get('/admin/edit/{users}','DashboardController@edit')->name('/admin/edit');
Route::post('/admin/update','DashboardController@update');

Route::get('/siswa','SiswaController@index')->middleware('auth')->name('siswa');
//->middleware('auth')->name('siswa');
Route::get('/siswa/create', 'SiswaController@create')->middleware('auth')->name('siswa');
Route::post('/siswa/create', 'SiswaController@store');
Route::get ('/siswa/{siswa}', 'SiswaController@show')->middleware('auth')->name('siswa');
Route::get('/siswa/hapus/{siswa}','SiswaController@hapus');
Route::get('/siswa/edit/{siswa}','SiswaController@edit');
Route::post('/siswa/update/{siswa}','SiswaController@update');

/*
Route::get('/TestPercobaan','SiswaController@edit');*/

Route::get('/siswa/show', function () {
    return view('/admin/siswa/show');
});


Route::get('/guru', 'GuruController@index')->middleware('auth')->name('guru');


Route::get('/guru/show/{nip}', 'GuruController@show')->middleware('auth')->name('showGuru');

// Route::get('/guru/create', 'GuruController@create')->middleware('auth')->name('guru/create');
Route::get('/guru/create', 'GuruController@create')->middleware('auth')->name('createGuru');
Route::post('/guru/create', 'GuruController@store');
Route::get('/guru/edit/{nip}', 'GuruController@edit')->middleware('auth')->name('editGuru');
Route::get ('/guru/cetak_pdf', 'GuruController@cetak_pdf')->middleware('auth')->name('guru/cetak_pdf');
Route::get ('/guru/cetak_profil_pdf/{nip}', 'GuruController@cetak_profil_pdf')->middleware('auth')->name('guru/cetak_profil_pdf');
Route::get('/guru/hapus/{guru}','GuruController@hapus');
Route::post('/guru/update/{nip}','GuruController@update');


Route::get('/staf/show/{nip_staf}', 'StafController@show')->middleware('auth')->name('showStaf');
Route::get('/staf', 'stafController@index')->middleware('auth')->name('staf');
Route::get('/staf/create', 'StafController@create')->middleware('auth')->name('createStaf');
Route::post('/staf/create', 'StafController@store');
Route::get('/staf/edit/{nip_staf}', 'StafController@edit')->middleware('auth')->name('editStaf');
Route::get ('/staf/cetak_pdf', 'StafController@cetak_pdf')->middleware('auth')->name('staf/cetak_pdf');
Route::get ('/staf/cetak_profil_pdf/{nip_staf}', 'StafController@cetak_profil_pdf')->middleware('auth')->name('staf/cetak_profil_pdf');
Route::get('/staf/hapus/{staf}','StafController@hapus');
Route::post('/staf/update/{nip_staf}','StafController@update');
 
Route::get('/kelas', 'KelasController@index')->middleware('auth')->name('kelas');
Route::get('/kelas/show/{id}', 'KelasController@show')->middleware('auth')->name('showKelas');
Route::get('/kelas/create', 'KelasController@create')->middleware('auth')->name('kelas');
Route::post('/kelas/create', 'KelasController@store');
Route::get ('/kelas/cetak_pdf', 'KelasController@cetak_pdf')->middleware('auth')->name('kelas/cetak_pdf');
Route::get ('/kelas/anggota/{id}', 'KelasController@showAnggota')->middleware('auth')->name('showAnggota');
Route::post ('/kelas/anggota/tambahAnggota', 'KelasController@updateAnggota')->middleware('auth');
Route::get ('/kelas/hapus/{id}', 'KelasController@delete')->middleware('auth')->name('hapusKelas');




Route::get('/walikelas/tambah','WaliKelasController@tambah')->middleware('auth')->name('walikelas');
Route::post('/tambahwalikelas', 'WaliKelasController@update')->middleware('auth')->name('tambahkelas');
Route::get('/walikelas', 'WaliKelasController@index');
Route::get ('/walikelas/cetak_pdf', 'WalikelasController@cetak_pdf')->middleware('auth')->name('walikelas/cetak_pdf');
Route::get('/walikelas/hapus/{guru}','WaliKelasController@hapus');




Route::get('/keuangan', 'KeuanganController@index')->middleware('auth')->name('keuangan');
Route::get('/keuangan/create', 'KeuanganController@create')->middleware('auth')->name('keuangan');
Route::post('/keuangan/create', 'keuanganController@store');

Route::get('/mapel', 'MapelController@index')->middleware('auth')->name('mapel');

Route::get('/mapel/create', 'MapelController@create')->middleware('auth')->name('mapel');
Route::post('/mapel/create', 'MapelController@store');
Route::get('/mapel/hapus/{mapel}','MapelController@hapus');

// Route::get('/absenguru', function () {
//     return view('/admin/absensi/guru');
// });

Route::get('/absenguru', 'AbsensiGuruController@index');
//Route::get('/guru/{id}', 'GuruController@show');
Route::post('/absenguru', 'AbsensiGuruController@store');
Route::get('/absenguru/laporanAbsensiGuru', 'AbsensiGuruController@show');
Route::get ('/absenguru/laporanAbsensiGuru/cetak_pdf/{tgl_lapor}', 'AbsensiGuruController@cetak_pdf')->middleware('auth');

Route::get('/absensiswasekolah', 'AbsensiSiswaSekolahController@index');
Route::post('/absensiswasekolah', 'AbsensiSiswaSekolahController@store');
Route::get('/absensiswasekolah/getUsers/{id}','AbsensiSiswaSekolahController@getUsers');
Route::get('/absensiswasekolah/LaporanSiswaSekolah','AbsensiSiswaSekolahController@show');
Route::get ('/absensiswasekolah/LaporanSiswaSekolah/cetak_pdf/{tgl_lapor}/{id_kelas}', 'AbsensiSiswaSekolahController@cetak_pdf')->middleware('auth');

Route::get('/absenbimbel', 'AbsensiBimbelController@index');
Route::post('/absenbimbel', 'AbsensiBimbelController@store');
Route::get('/absenbimbel/getUsers/{id}','AbsensiBimbelController@getUsers');
Route::get('/absenbimbel/LaporanBimbel','AbsensiBimbelController@show');
Route::get ('/absenbimbel/LaporanBimbel/cetak_pdf/{tgl_lapor}/{id_kelas}', 'AbsensiBimbelController@cetak_pdf')->middleware('auth');

Route::get('/absenpramubaligh', 'AbsensiPraMubalighController@index');
Route::post('/absenpramubaligh', 'AbsensiPraMubalighController@store');
Route::get('/absenpramubaligh/getUsers/{id}','AbsensiPraMubalighController@getUsers');
Route::get('/absenpramubaligh/LaporanPraMubaligh','AbsensiPraMubalighController@show');
Route::get ('/absenpramubaligh/LaporanPraMubaligh/cetak_pdf/{tgl_lapor}/{id_kelas}', 'AbsensiPraMubalighController@cetak_pdf')->middleware('auth');

Route::get('/absenpascamubaligh', 'AbsensiPascaMubalighController@index');
Route::post('/absenpascamubaligh', 'AbsensiPascaMubalighController@store');
Route::get('/absenpascamubaligh/getUsers/{id}','AbsensiPascaMubalighController@getUsers');
Route::get('/absenpascamubaligh/LaporanPascaMubaligh','AbsensiPascaMubalighController@show');
Route::get ('/absenpascamubaligh/LaporanPascaMubaligh/cetak_pdf/{tgl_lapor}/{id_kelas}', 'AbsensiPascaMubalighController@cetak_pdf')->middleware('auth');


Route::get('/absenpesantren', 'AbsensiPesantrenController@index');
Route::post('/absenpesantren', 'AbsensiPesantrenController@store');
Route::get('/absenpesantren/getUsers/{id}','AbsensiPesantrenController@getUsers');

// Route::get('/absenpesantren', 'AbsensiPesantrenController@index');
// Route::post('/absenpesantren', 'AbsensiPesantrenController@store');
// Route::get('/absenpesantren/getUsers/{id}','AbsensiPesantrenController@getUsers');

Route::get('/absenstaf', 'AbsenStafController@index');
Route::post('/absenstaf', 'AbsenStafController@store');
Route::get('/absenstaf/laporanAbsensiStaf', 'AbsenStafController@show');
Route::get ('/absenstaf/laporanAbsensiStaf/cetak_pdf/{tgl_lapor}', 'AbsenStafController@cetak_pdf')->middleware('auth');


// Route::get('/absensiswapengajian', function () {
//     return view('/admin/absensi/siswaPengajian');
// });
Route::get('/laporansiswasekolah', function () {
    return view('/admin/absensi/laporanSiswaSekolah');
});

Route::get('/laporansiswapengajian', function () {
    return view('/admin/absensi/laporanSiswaPengajian');
});

Route::get('/laporanguru', function () {
    return view('/admin/absensi/laporanGuru');
});

Route::get('/staff', function () {
    return view('/admin/staff/staff');
});

Route::get('/absenstaff', function () {
    return view('/admin/absensi/staff');
});

Route::get('/staff/create', function () {
    return view('/admin/staff/create');
});

Route::get('/laporanstaff', function () {
    return view('/admin/absensi/laporanStaff');
});




Route::get('/kirimemail','AdminEmailController@index');

Auth::routes();

// Route::get('/admin-login','AdminLoginController@showLoginForm');
// Route::post('/admin-login', ['as' => 'admin-login', 'uses' => 'AdminLoginController@login']);
// Route::get('/admin-register','AdminLoginController@showRegisterPage');
// Route::post('/admin-register', 'AdminLoginController@register')->name('admin.register');

Route::get('/admin-login', 'AdminController@showLoginForm')->name('admin.loginform');
// Route::get('/admin-register', 'AdminController@showRegisterForm')->name('admin.registerform');
Route::post('/admin-login', 'AdminController@login')->name('admin.login');
// Route::post('/admin-register', 'AdminController@register')->name('admin.register');
Route::get('/admin-home', 'AdminController@index')->middleware('auth:admin')->name('admin.home');
Route::get('/admin-logout', 'AdminController@logout')->name('admin.logout');


// Route::get('/notif', function() {
//     $user = \App\SiswaModel::first();
//     $user->notify(new \App\Notifications\Daftar);
// });

// Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function()
// {
// Route::match(['get', 'post'], '/adminOnlyPage/', 'HomeController@admin');
// });

// Route::group(['middleware' => 'App\Http\Middleware\SuperAdminMiddleware'], function()
// {
// Route::match(['get', 'post'], '/SuperAdminOnlyPage/', 'HomeController@super_admin');
// });

// Route::group(['middleware' => 'App\Http\Middleware\KeuanganMiddleware'], function()
// {
// Route::match(['get', 'post'], '/KeuanganOnlyPage/', 'HomeController@Keuangan');
// });

// Route::group(['middleware' => 'App\Http\Middleware\AbsensiMiddleware'], function()
// {
// Route::match(['get', 'post'], '/AbsensiOnlyPage/', 'HomeController@Absensi');
// });

