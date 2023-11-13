<?php

use App\Models\User;
use App\Models\Prestasi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LombaController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\LandingpageController;

// Route Auth Login & Logout
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('proses_register', [AuthController::class, 'proses_register'])->name('proses_register');
Route::post('proses_login', 'App\Http\Controllers\AuthController@proses_login')->name('proses_login');
Route::get('keluar', 'App\Http\Controllers\AuthController@logout')->name('logout');

// Route Lupa Password
Route::post('/forget_password', [AuthController::class, 'send_request_reset'])->name('send_request_reset');
Route::get('/password/reset{token}', [AuthController::class, 'reset_password'])->name('reset_password');
Route::post('/password/reset', [AuthController::class, 'update_password'])->name('password_reset');

// Route Landingpage
Route::get('/', [LandingpageController::class, 'index']);
Route::get('data_prestasi', [LandingpageController::class, 'data_prestasi'])->name('data_prestasi.index');
Route::get('logout', [LandingpageController::class, 'logout'])->name('keluar');

// Route Autentikasi Login
Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
        // Route Admin
        Route::get('/admin', [AdminController::class, 'index'])->name('admin');
        Route::get('profil_admin/{id}', [AdminController::class, 'profil'])->name('admin_profil');
        Route::post('update_profil_admin/{id}', [AdminController::class, 'update_profil'])->name('admin_update_profil');

        // Route Manajemen Mahasiswa
        Route::get('/mahasiswa', [AdminController::class, 'mahasiswa'])->name('mahasiswa');
        Route::post('proses_tambah', [AdminController::class, 'create_mahasiswa'])->name('daftarkan_mahasiswa');
        Route::post('proses_edit/{id}', [AdminController::class, 'update_mahasiswa'])->name('update_mahasiswa');
        Route::delete('mahasiswa/delete/{id}', [AdminController::class, 'delete_mahasiswa'])->name('admin.delete');

        // Route Manajemen Prestasi
        Route::get('/prestasi', [PrestasiController::class, 'index'])->name('prestasi');
        Route::post('prestasi', [PrestasiController::class, 'admin_create_prestasi']);
        Route::post('update_prestasi/{id}', [PrestasiController::class, 'admin_update_prestasi']);
        Route::delete('prestasi/delete/{id}', [PrestasiController::class, 'admin_delete_prestasi'])->name('prestasi.delete');

        // Route Manajemen Lomba
        Route::get('/lomba', [LombaController::class, 'lomba'])->name('lomba');
        Route::post('lomba', [LombaController::class, 'admin_create_lomba']);
        Route::post('update_lomba/{id}', [LombaController::class, 'admin_update_lomba'])->name('admin_update_lomba');
        Route::delete('lomba/delete/{id}', [LombaController::class, 'admin_delete_lomba'])->name('lomba.delete');
        Route::post('konfirmasi_lomba/{id}', [PrestasiController::class, 'konfirmasi_lomba'])->name('konfirmasi_lomba');
    });

    Route::group(['middleware' => ['cek_login:mahasiswa']], function () {
        // Route User
        Route::get('user', [UserController::class, 'index'])->name('user');
        Route::get('profil_mahasiswa/{id}', [UserController::class, 'profil'])->name('mahasiswa_profil');
        Route::post('update_profil_mahasiswa/{id}', [UserController::class, 'update_profil'])->name('mahasiswa_update_profil');

        // Route Manajemen Lomba
        Route::get('user_lomba', [UserController::class, 'user_lomba'])->name('user_lomba');
        Route::post('user_lomba', [LombaController::class, 'user_create_lomba'])->name('add_proses_user.store');
        Route::post('user_update_lomba/{id}', [LombaController::class, 'user_update_lomba'])->name('user_update_lomba');
        Route::get('user_lomba/delete/{id}', [LombaController::class, 'user_delete_lomba'])->name('hapus_lomba');

        // Route Perolehan Prestasi
        Route::get('user_prestasi', [UserController::class, 'user_prestasi'])->name('user_prestasi');
        Route::get('user_download', [PrestasiController::class, 'user_download'])->name('user_download');
    });
});

// Route Download
Route::get('download', [PrestasiController::class, 'download'])->name('download');
