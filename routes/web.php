<?php

use App\Http\Controllers\kendaraanControl;
use App\Http\Controllers\pegawaiControl;
use App\Http\Controllers\pesananControl;
use App\Http\Controllers\stafControl;
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

Auth::routes();
Route::middleware(['role:admin'])->group(function () {
    Route::get('/pegawai', [pegawaiControl::class, 'index']);
    Route::post('/pegawai', [pegawaiControl::class, 'store']);
    Route::get('/pegawai/create', [pegawaiControl::class, 'create']);
    Route::delete('/pegawai/{id}', [pegawaiControl::class, 'destroy']);
    Route::get('/pegawai/{id}/edit', [pegawaiControl::class, 'edit']);
    Route::put('/pegawai/{id}', [pegawaiControl::class, 'update']);

    Route::get('/pesanan', [pesananControl::class, 'index']);
    Route::post('/pesanan', [pesananControl::class, 'store']);
    Route::get('/pesanan/create', [pesananControl::class, 'create']);
    Route::delete('/pesanan/{id}', [pesananControl::class, 'destroy']);
    Route::get('/pesanan/{id}/edit', [pesananControl::class, 'edit']);
    Route::put('/pesanan/{id}', [pesananControl::class, 'update']);

    Route::get('/kendaraan', [kendaraanControl::class, 'index']);
    Route::post('/kendaraan', [kendaraanControl::class, 'store']);
    Route::get('/kendaraan/create', [kendaraanControl::class, 'create']);
    Route::delete('/kendaraan/{id}', [kendaraanControl::class, 'destroy']);
    Route::get('/kendaraan/{id}/edit', [kendaraanControl::class, 'edit']);
    Route::put('/kendaraan/{id}', [kendaraanControl::class, 'update']);
});
Route::middleware(['role:staf'])->group(function () {
   Route::post('/verif/{id}',[stafControl::class,'verif']);
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
