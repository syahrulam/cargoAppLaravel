<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function(){
// Dashboard Start
Route::get('/dashboard',[\App\Http\Controllers\DashboardController::class,'index']);
// Dashboard End

// Pelanggan Start
Route::get('/pelanggan',[\App\Http\Controllers\CustomerController::class,'index']);
Route::get('/pelanggan/create',[\App\Http\Controllers\CustomerController::class,'create']);
Route::post('/pelanggan/created',[\App\Http\Controllers\CustomerController::class,'store']);
Route::get('/pelanggan/{id}/edit',[\App\Http\Controllers\CustomerController::class,'edit']);
Route::put('/pelanggan/{id}/update',[\App\Http\Controllers\CustomerController::class,'update']);
Route::get('/pelanggan/{id}/hapus',[\App\Http\Controllers\CustomerController::class,'delete']);
// Pelanggan End

// armada Start
Route::get('/armada',[\App\Http\Controllers\ArmadaController::class,'index']);
Route::get('/armada/create',[\App\Http\Controllers\ArmadaController::class,'create']);
Route::post('/armada/created',[\App\Http\Controllers\ArmadaController::class,'store']);
Route::get('/armada/{id}/edit',[\App\Http\Controllers\ArmadaController::class,'edit']);
Route::put('/armada/{id}/update',[\App\Http\Controllers\ArmadaController::class,'update']);
Route::get('/armada/{id}/hapus',[\App\Http\Controllers\ArmadaController::class,'delete']);
// armada End
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
