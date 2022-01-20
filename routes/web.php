<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cartController;
use App\Http\Controllers\authController;

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


Route::get('/', [cartController::Class, 'index']);
Route::get('/cart', [cartController::Class, 'cartIndex']);
Route::get('/product_details', [cartController::Class, 'detailsIndex']);
Route::get('/login', [cartController::Class, 'loginIndex']);
Route::get('/registation', [cartController::Class, 'registation']);

Route::post('/register', [authController::Class, 'register']);
Route::post('/Login', [authController::Class, 'login']);
