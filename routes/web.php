<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\NewsController;
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
Route::get('/payment', [MainController::class, 'payment'])->name('main.payment');

Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('users.login');
    Route::post('/login', [LoginController::class, 'store'])->name('users.login');
    Route::get('/register', [UserController::class, 'create'])->name('users.register');
    Route::post('/register', [UserController::class, 'store'])->name('users.store');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/notifications', [UserController::class, 'showNotifications'])->name('users.notifications');
    Route::get('/notifications/create', [NotificationController::class, 'create'])->name('notifications.create');
    Route::post('/notifications', [NotificationController::class, 'store'])->name('notifications.store');
    Route::post('/notifications/{id}/read', [NotificationController::class, 'markAsRead'])->name('notifications.read');
    Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');
    Route::post('/news', [NewsController::class, 'store'])->name('news.store');

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
