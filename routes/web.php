<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DaftarController;


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

Route::get('/', [HomeController::class, 'index']);

Route::get('/daftar', [DaftarController::class, 'index']);
Route::post('/daftar', [DaftarController::class, 'storePaket']);

Route::get('/tertib', [DaftarController::class, 'tertib']);
Route::post('/tertib', [DaftarController::class, 'storeTertib']);

Route::get('/penyelenggaraan', [DaftarController::class, 'penyelenggaraan']);
Route::post('/penyelenggaraan', [DaftarController::class, 'storePenyelenggaraan']);