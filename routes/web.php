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

// Homepage
Route::get('/', function () {
    return view('public-views.index');
});

// View Register Form
Route::get('/register', [UserController::class, 'index'])->middleware('guest');

// Create User
Route::post('/', [UserController::class, 'store']);

// Logout
Route::post('/logout', [UserController::class, 'logout']);

// Login
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Actual User login
Route::post('/users/dashboard', [UserController::class, 'authenticate']);

// Go to Specific Dashboard
Route::get('/users/dashboard', [UserController::class, 'dashboard']);


// Checker if User is Merchant
// Route::get('/mdb')