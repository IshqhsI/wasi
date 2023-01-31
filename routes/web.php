<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\AdminController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->middleware('guest');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

// Route::get('/login', [LoginController::index, 'index']);
Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'Login'])->middleware('guest');


Route::get('/logout', [LoginController::class, 'Logout'])->middleware('auth');

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');



Route::get('/daftar', [DaftarController::class, 'index'])->middleware('auth');
Route::post('/daftar', [DaftarController::class, 'storePaket'])->middleware('auth');

Route::get('/tertib', [DaftarController::class, 'tertib'])->middleware('auth');
Route::post('/tertib', [DaftarController::class, 'storeTertib'])->middleware('auth');

Route::get('/penyelenggaraan', [DaftarController::class, 'penyelenggaraan'])->middleware('auth');
Route::post('/penyelenggaraan', [DaftarController::class, 'storePenyelenggaraan'])->middleware('auth');

Route::get('/profil', [ProfilController::class, 'index'])->middleware('auth');
Route::get('/profil2', [ProfilController::class, 'index2'])->middleware('auth');
Route::get('/profil3', [ProfilController::class, 'index3'])->middleware('auth');

Route::get('/admin', [AdminController::class, 'index'])->middleware('admin');
Route::get('/admin/detail/{id}', [AdminController::class, 'detail'])->middleware('admin');
Route::get('/admin/detail2/{id}', [AdminController::class, 'detail2'])->middleware('admin');
Route::get('/admin/detail3/{id}', [AdminController::class, 'detail3'])->middleware('admin');



Route::get('/admin/hapus/{id}', [AdminController::class, 'destroy'])->middleware('admin');
Route::get('/admin/edit/{id}', [AdminController::class, 'edit'])->middleware('admin');

Route::post('/admin/edit/{id}', [AdminController::class, 'update'])->middleware('admin');
Route::post('/admin/edit/tertib/{id}', [AdminController::class, 'updateTertib'])->middleware('admin');
Route::post('/admin/edit/penyelenggaraan/{id}', [AdminController::class, 'updatePenyelenggaraan'])->middleware('admin');