<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfaqController;


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


Route::get('/index', function () {
    return view('payment.index');
});
Route::get('/form', function () {
    return view('payment.form');
});
Route::get('riwayat', [InfaqController::class, 'riwayat']);
Route::get('tagihan', [InfaqController::class, 'tagihan']);
Route::get('payment', [InfaqController::class, 'payment']);
Route::get('dahboard', [InfaqController::class, 'dashboard']);


