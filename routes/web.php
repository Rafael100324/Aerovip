<?php

use App\Http\Controllers\FlightsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SuccessController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[UserController::class,'showLogin'])->name('showLogin');

Route::post('/',[UserController::class,'login'])->name('login');

Route::get('/logout',[UserController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/home', [HomeController::class,'index'])->name('home')->middleware('auth');

Route::get('/voos', [FlightsController::class, 'voo'])-> name('voo')->middleware('auth');

Route::get('/pagamento', [PaymentController::class, 'pagar'])-> name('pagamento')->middleware('auth');

Route::get('/sucesso', [SuccessController::class, "pagamentoRealizado"])-> name('sucesso')->middleware('auth');
