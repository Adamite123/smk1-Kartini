<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JurusanController;
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
    return view('index');
});

Route::get('/admin', function () {
    return view('admin/admin_dashboard');
});

Route::get('/add-kegiatan', function () {
    return view('admin/add-kegiatan');
});


Route::get('/add-jurusan', [JurusanController::class, 'create']);
Route::post('/jurusan', [JurusanController::class, 'store']);

Auth::routes();
Route::post('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/edit-jurusan/{id}', [JurusanController::class, 'create'])->name('edit-jurusan');
Route::get('/jurusan/{id}', [JurusanController::class, 'destroy'])->name('delete-jurusan');