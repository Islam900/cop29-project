<?php

use App\Http\Controllers\Admin\{DashboardController, UsersController};
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Dri\{
    DriDashboardController,
    DsngsController,
    OperationalsController
};
use App\Http\Controllers\{
    UserOperationalsController,
    UserDsngsController
};
use Illuminate\Support\Facades\Auth;
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

Route::fallback(function () {
    return view('404');
});

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();
Route::post('reset-password', [ResetPasswordController::class, 'resetPassword'])->name('resetPassword');

Route::prefix('admin')->name('admin.')->middleware(['auth', 'cop_29_middleware:admin'])->group(function () {
   Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
   Route::resource('users', UsersController::class);
});

Route::prefix('dri')->name('dri.')->middleware(['auth', 'cop_29_middleware:dri'])->group(function () {
    Route::get('/dashboard', [DriDashboardController::class, 'index'])->name('dashboard');
    Route::resource('operationals', OperationalsController::class);
    Route::resource('dsngs', DsngsController::class);
});


Route::prefix('user')->name('user.')->middleware(['auth', 'cop_29_middleware:user'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('/operationals', UserOperationalsController::class);
    Route::resource('/dsngs', UserDsngsController::class);
});

Route::get('check-otp', [ResetPasswordController::class, 'check_otp'])->name('check-otp');
Route::post('new-password', [ResetPasswordController::class, 'new_password'])->name('new-password');
Route::get('set-new-password', [ResetPasswordController::class, 'set_new_password'])->name('set-new-password');
Route::post('update-password', [ResetPasswordController::class, 'update_password'])->name('update-password');
