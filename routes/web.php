<?php

use App\Http\Controllers\PembayaranAirController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Menampilkan index dari semua data
Route::get('/', [PembayaranAirController::class, 'index'])->name('index');

// Menampilkan Form Create Pembayaran Air
Route::get('/create', [PembayaranAirController::class, 'create'])->name('create');

// Mengirim hasil inputan dari Form Pembayaran Air
Route::post('/create', [PembayaranAirController::class, 'store'])->name('store');

// Melihat Data Pembayaran Air berdasarkan ID
Route::get('/data/air/{id}', [PembayaranAirController::class, 'show'])->name('show');

// Menampilkan view Form Edit Pembayaran Air
Route::get('/data/air/{id}/edit', [PembayaranAirController::class, 'edit'])->name('edit');

Route::patch('/data/air/{id}/edit', [PembayaranAirController::class, 'update'])->name('update');