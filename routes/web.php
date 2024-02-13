<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\InfaqController;
use App\Http\Controllers\RedirectController;


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

Route::group(['middleware' => 'guest'], function() {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'store']);
});

// untuk superadmin dan pegawai
Route::group(['middleware' => ['auth', 'checkrole:1,2']], function() {
    Route::get('/logout', [AuthController::class, 'logout']);
    Route::get('/redirect', [RedirectController::class, 'cek']);

    Route::get('riwayat', [InfaqController::class, 'riwayat']);
    Route::get('tagihan', [InfaqController::class, 'tagihan']);
    Route::get('payment', [InfaqController::class, 'payment']);
    Route::get('pembayaran', [InfaqController::class,'pembayaran']);
    
});

// untuk superadmin
Route::group(['middleware' => ['auth', 'checkrole:1']], function() {
    Route::get('dashboard', [InfaqController::class, 'dashboard']);
});

// untuk pegawai
Route::group(['middleware' => ['auth', 'checkrole:2']], function() {
    Route::get('/perjanjian', [UserController::class, 'perjanjian']);
    Route::post('/perjanjian', [UserController::class, 'nominal_form']);

});


Route::get('forgot-password', [InfaqController::class, 'forgotpassword']);

