<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginFormController;
use App\Http\Controllers\MissionController;

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


Route::get('/', function () {
    return view('home');
})->name('home');

Route::middleware('guest')->group(function () {
    Route::get('login', LoginFormController::class)->name('login');
    Route::post('login/check', [LoginController::class, 'authenticate'])->name('check');
});

Route::middleware('auth')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('create', [DashboardController::class, 'create'])->name('create');
    Route::post('store', [DashboardController::class, 'store'])->name('store');
    Route::get('read/{id}', [DashboardController::class, 'show'])->name('read');
    Route::get('edit/{id}', [DashboardController::class, 'edit'])->name('edit');
    Route::put('update/{id}', [DashboardController::class, 'update'])->name('update');
    Route::delete('destroy/{id}', [DashboardController::class, 'destroy'])->name('destroy');

    Route::get('logout', LogoutController::class)->name('logout');
});
