<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
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

Route::get('/', [BookController::class, 'indexGuest']);
Route::get('/viewGuest', [BookController::class, 'viewGuest']);
Route::get('/viewAdmin', [BookController::class, 'viewAdmin'])->middleware('admin');
Route::get('/addBook', [BookController::class, 'addBook'])->middleware('admin');
Route::post('/insertBook', [BookController::class, 'store'])->middleware('admin');
Route::get('/delete/{id}', [BookController::class, 'destroy'])->middleware('admin');
Route::get('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthController::class, 'validateLogin'])->name('validateLogin');
Route::get('/homeAdmin', [AuthController::class, 'admin'])->middleware('admin');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
