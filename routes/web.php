<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/',  [UserController::class, 'index']);
Route::get('/index', [UserController::class, 'index']);
Route::get('/input', [UserController::class, 'input']);
Route::post('/input',[UserController::class, 'createUser']);
Route::post('/user/{id}', [UserController::class, 'editUser']);
Route::get('/user/{id}', [UserController::class,'getEditUser']);
Route::get('/delete/{id}',[UserController::class, 'deleteUser']);