<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'home']);

Route::get('/register', [AuthController::class, 'register']);

Route::post('/welcome', [AuthController::class, 'Welcome']);

Route::get('/dashboard', function(){
    return view('welcome');
});
Route::get('/table', function(){
    return view('tables.table');
});

Route::get('/data-table', function(){
    return view('tables.data-table');
});