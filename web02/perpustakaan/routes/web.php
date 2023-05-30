<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PeminjamanBukuController;
use App\Http\Controllers\RegistrasiAnggotaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/salam', function () {
    return 'Assalamualaikum Dunia!';
});

Route::get('/kondisi', function () {
    return view('kondisi');
});
Route::get('/nilai', function () {
    return view('nilai');
});

Route::get('/tes-kesehatan', function () {
    return view('tes-kesehatan');
});

Route::get('/form-registrasi-anggota', [RegistrasiAnggotaController::class, 'index']);
Route::post('/hasil-regist', [RegistrasiAnggotaController::class, 'hasil']);


Route::get('/form-peminjaman-buku', [PeminjamanBukuController::class, 'index']);
Route::post('/hasil-peminjaman', [PeminjamanBukuController::class, 'hasil']);

Route::prefix('/dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::get('/book', [BookController::class, 'index']);
    Route::get('/member', [MembersController::class, 'index']);
});


