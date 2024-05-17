<?php

use App\Http\Controllers\Auth\ResetPasswordController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\{
    DashboardController,
    UsersController
};

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

Route::fallback(function () {
    return view('404');
});

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();
Route::post('reset-password', [ResetPasswordController::class, 'resetPassword'])->name('resetPassword');

Route::prefix('admin')->name('admin.')->middleware(['auth', 'check_user_role:admin'])->group(function () {
   Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
   Route::resource('users', UsersController::class);
});


Route::prefix('user')->name('user.')->middleware(['auth', 'check_user_role:user'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('/operationals', \App\Http\Controllers\OperationalsController::class);
    Route::resource('/dsngs', \App\Http\Controllers\DsngsController::class);
});
