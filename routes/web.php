<?php

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

// Views Routes:

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware(['auth', 'no-cache']);

// UserController Routes:

Route::post('/loginFunction',[UserController::class, 'login'])->name('loginFunction');
Route::post('/signupFunction',[UserController::class, 'signup'])->name('signupFunction');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');