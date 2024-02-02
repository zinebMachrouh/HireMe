<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ServiceController;
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

Route::get('/profile', function () {
    return view('profile');
})->name('profile')->middleware(['auth']);

// UserController Routes:

Route::post('/loginFunction',[UserController::class, 'login'])->name('loginFunction');
Route::post('/signupFunction',[UserController::class, 'signup'])->name('signupFunction');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

//ServiceController Routes:
// Route::resource('services', ServiceController::class);
Route::get('/profile', [ServiceController::class, 'myServices'])->name('profile')->middleware(['auth']);

Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/create', [ServiceController::class, 'create'])->name('services.create');
Route::post('/services', [ServiceController::class, 'store'])->name('services.store');
Route::get('/services/{service}/edit', [ServiceController::class, 'edit'])->name('services.edit');
Route::put('/services/{service}', [ServiceController::class, 'update'])->name('services.update');
Route::get('/services/delete/{service}', [ServiceController::class, 'destroy'])->name('services.destroy');

Route::get('/sendEmail/{service}', [UserController::class, 'sendEmail'])->name('sendEmail');
