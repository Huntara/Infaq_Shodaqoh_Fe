<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfaqController;
use App\Http\Controllers\PaymentController;


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

Route::get('riwayat', [InfaqController::class, 'riwayat']);
Route::get('tagihan', [InfaqController::class, 'tagihan']);
Route::get('payment', [InfaqController::class, 'payment']);
Route::get('dashboard', [InfaqController::class, 'dashboard']);
Route::get('login', [InfaqController::class, 'login']);
Route::get('forgot-password', [InfaqController::class, 'forgotpassword']);

