<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
