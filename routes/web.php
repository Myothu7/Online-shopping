<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\HomeController;
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
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LoginController::class, 'view']);
Route::post('/', [LoginController::class, 'login_check']);
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/add', [CategoryController::class, 'add']);
Route::post('/categories/add', [CategoryController::class, 'create']);
Route::get('/categories/{id}',[CategoryController::class, 'edit']);
Route::post('/categories/{id}',[CategoryController::class, 'update']);
Route::get('/categories/delete/{id}', [CategoryController::class, 'delete']);

Route::get('/items', [ItemController::class, 'index']);
Route::get('/items/add', [ItemController::class, 'show']);
Route::post('/items/add', [ItemController::class, 'create']);
Route::get('/items/{id}',[ItemController::class, 'edit']);
Route::post('/items/{id}',[ItemController::class, 'update']);
Route::get('/items/delete/{id}', [ItemController::class, 'delete']);
