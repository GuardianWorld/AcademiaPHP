<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
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
    return to_route('main.index');
});


Route::get('/main', [MainController::class, 'index'])->name('main.index');
Route::get('/login', [LoginController::class, 'index'])->name('users.login');
Route::post('/login', [LoginController::class, 'store'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [UserController::class, 'create'])->name('users.register');
Route::post('/register', [UserController::class, 'store'])->name('users.store');

Route::get('/profile', [UserController::class, 'showProfile'])->name('users.profile');
Route::get('/training', [UserController::class, 'showTraining'])->name('users.training');

Route::get('/logout', [UserController::class, 'logout'])->name('users.logout');

Route::get('/email', function () {
    return new \App\Mail\TimesCreated(
        'Cruzeiro',
         'Abel Braga'
    );
});
