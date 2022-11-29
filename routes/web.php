<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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

//Home
Route::get('/', [HomeController::class, 'Home'] );

//Register
Route::get('/Register', [AuthController::class, 'Register'] );
Route::get('/Welcome', [AuthController::class, 'Welcome'] )->name('Welcome');
//Welcome

