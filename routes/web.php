<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KontrakMatakuliahController;
use App\Http\Controllers\AbsenController;

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
    return redirect()->route('dashboard');
});

Route::middleware(['auth'])->group(function () {
    Route::get('mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
    Route::post('mahasiswa', [MahasiswaController::class, 'store']);
    Route::get('fetch-mahasiswa', [MahasiswaController::class, 'fetchmahasiswa']);
    Route::get('edit-mahasiswa/{id}', [MahasiswaController::class, 'edit']);
    Route::put('update-mahasiswa/{id}', [MahasiswaController::class, 'update']);
    Route::delete('delete-mahasiswa/{id}', [MahasiswaController::class, 'destroy']);

    //matakuliah
    Route::get('matakuliah', [MatakuliahController::class, 'index'])->name('matakuliah.index');
    Route::post('matakuliah', [MatakuliahController::class, 'store']);
    Route::get('fetch-matakuliah', [MatakuliahController::class, 'fetchmatakuliah']);
    Route::get('edit-matakuliah/{id}', [MatakuliahController::class, 'edit']);
    Route::put('update-matakuliah/{id}', [MatakuliahController::class, 'update']);
    Route::delete('delete-matakuliah/{id}', [MatakuliahController::class, 'destroy']);

    Route::resource('semester', SemesterController::class);
    Route::resource('jadwal', JadwalController::class);
    Route::resource('kontrakmatakuliah', KontrakMatakuliahController::class);
    Route::resource('kontrakmatakuliah', KontrakMatakuliahController::class);
    Route::resource('absen', AbsenController::class);
});
Route::get('/dashboard', function () {
    return redirect()->route('mahasiswa.index');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
