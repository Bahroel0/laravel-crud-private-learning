<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PenulisController;
use App\Http\Controllers\HewanController;
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

Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');
Route::get('/buku/create', [BukuController::class, 'create'])->name('buku.create');

Route::get('/penulis', [PenulisController::class, 'index'])->name('penulis.index');
Route::get('/penulis/create', [PenulisController::class, 'create'])->name('penulis.create');
Route::post('/penulis/create', [PenulisController::class, 'store'])->name('penulis.store');


// CRUD Hewan
Route::get('/hewan', [HewanController::class, 'index'])->name('hewan.index');
Route::get('/hewan/create', [HewanController::class, 'create'])->name('hewan.create');
Route::get('/hewan/{id}', [HewanController::class, 'detail'])->name('hewan.detail');
Route::post('/hewan/create', [HewanController::class, 'store'])->name('hewan.store');
Route::get('/hewan/update/{id}', [HewanController::class, 'update'])->name('hewan.update');
Route::post('/hewan/update/{id}', [HewanController::class, 'saveUpdate'])->name('hewan.saveUpdate');
Route::delete('/hewan/{id}', [HewanController::class, 'destroy'])->name('hewan.destroy');
