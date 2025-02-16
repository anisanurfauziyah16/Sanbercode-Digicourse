<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;

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

Route::get('/', [DashboardController::class,"home"]);
Route::get('/Daftar', [AuthController::class,"register"]);
Route::post('/welcome',[AuthController::class,"welcome"]);


Route::get('/data-table', function(){
    return view('partials.data-table');
});

Route::get('/table', function(){
    return view('partials.table');
});


