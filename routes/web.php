<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\Auth\LoginController;

// Route untuk login dan logout
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Halaman utama
Route::get('/', function () {
    return view('welcome', ['title' => 'Aplikasi Penjualan Barang Berbasis Web dengan Framework Laravel']);
});

// Halaman home
Route::get('home', function () {
    return view('home');
})->middleware('auth');

// Kelas
Route::get('kelas', [KelasController::class, 'index'])->name('kelas.index')->middleware('auth');
Route::delete('kelas/{kelas}', [KelasController::class, 'destroy'])->name('kelas.destroy')->middleware('auth');
Route::get('kelas/create', [KelasController::class, 'create'])->name('kelas.create')->middleware('auth');
Route::post('kelas', [KelasController::class, 'store'])->name('kelas.store')->middleware('auth');
Route::get('kelas/{kelas}/edit', [KelasController::class, 'edit'])->name('kelas.edit')->middleware('auth');
Route::put('kelas/{kelas}', [KelasController::class, 'update'])->name('kelas.update')->middleware('auth');

// Mapel
Route::get('mapel', [MapelController::class, 'index'])->name('mapel.index')->middleware('auth');
Route::delete('mapel/{kd_mapel}', [MapelController::class, 'destroy'])->name('mapel.destroy')->middleware('auth');
Route::get('mapel/create', [MapelController::class, 'create'])->name('mapel.create')->middleware('auth');
Route::post('mapel', [MapelController::class, 'store'])->name('mapel.store')->middleware('auth');
Route::get('mapel/{kd_mapel}/edit', [MapelController::class, 'edit'])->name('mapel.edit')->middleware('auth');
Route::put('mapel/{kd_mapel}', [MapelController::class, 'update'])->name('mapel.update')->middleware('auth');

// Siswa
Route::get('siswa', [SiswaController::class, 'index'])->name('siswa.index')->middleware('auth');
Route::delete('siswa/{nis}', [SiswaController::class, 'destroy'])->name('siswa.destroy')->middleware('auth');
Route::get('siswa/create', [SiswaController::class, 'create'])->name('siswa.create')->middleware('auth');
Route::post('siswa', [SiswaController::class, 'store'])->name('siswa.store')->middleware('auth');
Route::get('siswa/{nis}/edit', [SiswaController::class, 'edit'])->name('siswa.edit')->middleware('auth');
Route::put('siswa/{nis}', [SiswaController::class, 'update'])->name('siswa.update')->middleware('auth');

// Nilai
Route::get('nilai', [NilaiController::class, 'index'])->name('nilai.index')->middleware('auth');
Route::delete('nilai/{nis}', [NilaiController::class, 'destroy'])->name('nilai.destroy')->middleware('auth');
Route::get('nilai/create', [NilaiController::class, 'create'])->name('nilai.create')->middleware('auth');
Route::post('nilai', [NilaiController::class, 'store'])->name('nilai.store')->middleware('auth');
Route::get('nilai/{nis}/edit', [NilaiController::class, 'edit'])->name('nilai.edit')->middleware('auth');
Route::put('nilai/{nis}', [NilaiController::class, 'update'])->name('nilai.update')->middleware('auth');

// Pengguna
Route::get('pengguna', [PenggunaController::class, 'index'])->name('pengguna.index')->middleware('auth');
Route::delete('pengguna/{name}', [PenggunaController::class, 'destroy'])->name('pengguna.destroy')->middleware('auth');
Route::get('pengguna/create', [PenggunaController::class, 'create'])->name('pengguna.create')->middleware('auth');
Route::post('pengguna', [PenggunaController::class, 'store'])->name('pengguna.store')->middleware('auth');

// Otentikasi otomatis
Auth::routes();


