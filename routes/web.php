<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\add_user;
use App\Http\Controllers\indexController;
use App\Http\Controllers\galeriController;
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

Route::get('/', [indexController::class, 'index']);

Route::get('/admin', [HomeController::class, 'index']);


// -- USER --
Route::get('/add-user', [add_user::class, 'index'])->middleware('auth');
Route::get('/user-edit', [add_user::class, 'index'])->name('users.edit')->middleware('auth');
Route::delete('/user-delete/{user}', [add_user::class, 'destroy'])->name('users.destroy');


// -- Galeri Kegiatan--
Route::get('/add-element-galeri', [galeriController::class, 'index'])->middleware('auth');
Route::put('/galeri_element/{id}', [galeriController::class, 'update'])->middleware('auth');

Route::get('/add-kegiatan', [galeriController::class, 'add_kegiatan'])->middleware('auth');

// -- JURUSAN --
Route::get('/add-jurusan', [JurusanController::class, 'create'])->middleware('auth');
Route::get('/edit-jurusan/{id}', [JurusanController::class, 'create'])->name('edit-jurusan')->middleware('auth');
Route::get('/jurusan/{id}', [JurusanController::class, 'destroy'])->name('delete-jurusan')->middleware('auth');
Route::post('/jurusan', [JurusanController::class, 'store']);

Auth::routes();
Route::post('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');