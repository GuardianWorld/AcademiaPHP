<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\NotificationController;
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

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('users.login');
    Route::post('/login', [LoginController::class, 'store'])->name('users.login');
    Route::get('/register', [UserController::class, 'create'])->name('users.register');
    Route::post('/register', [UserController::class, 'store'])->name('users.store');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications.index');
    Route::get('/notifications/{id}', [NotificationController::class, 'show'])->name('notifications.show');
    Route::post('/notifications/{id}', [NotificationController::class, 'update'])->name('notifications.update');
});
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [UserController::class, 'showProfile'])->name('users.profile');
    Route::get('/training', [UserController::class, 'showTraining'])->name('users.training');
    Route::get('/training/create', [TrainingController::class, 'create'])->name('trainings.create');
    Route::post('/training', [TrainingController::class, 'store'])->name('trainings.store');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [UserController::class, 'logout'])->name('users.logout');
});


Route::get('/email', function () {
    return new \App\Mail\TimesCreated(
        'Cruzeiro',
         'Abel Braga'
    );
});
