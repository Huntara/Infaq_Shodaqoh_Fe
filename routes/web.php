<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfaqController;
use App\Http\Controllers\PembayaranController;

use App\Models\Pembayaran;



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
    return view('welcome');
});
Route::get('pembayaran', [PembayaranController::class, 'pembayaran']);
Route::get('pembayaran/create', [PembayaranController::class, 'store']);
Route::get('pembayaran/{id}/edit', [PembayaranController::class, 'edit']);
Route::get('pembayaran/{id}/update', [PembayaranController::class, 'update']);
Route::get('pembayaran/{id}/delete', [PembayaranController::class, 'delete']);

Route::get('riwayat', [InfaqController::class, 'riwayat']);
Route::get('tagihan', [InfaqController::class, 'tagihan']);
Route::get('dashAdmin', [InfaqController::class, 'dashAdmin']);
Route::get('login', [InfaqController::class, 'login']);
Route::get('forgot-password', [InfaqController::class, 'forgotpassword']);
Route::get('dashUser', [InfaqController::class, 'dashUser']);

Route::get('dashboard', [InfaqController::class, 'dashboard']);
Route::get('login', [InfaqController::class, 'login']);
Route::get('forgot-password', [InfaqController::class, 'forgotpassword']);
Route::get('pembayaran', [InfaqController::class, 'pembayaran']);
Route::get('popup', [InfaqController::class, 'popup']);
