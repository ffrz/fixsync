<?php

use App\Http\Controllers\ProfileController;
use App\Http\Middleware\OnlyAuth;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Modul web
Route::get('/', function () {
    return view('web.home');
})->name('name');

// Modul admin
Route::get('/cek-status-servis', function () {
    return view('web.track');
})->name('tracking.index');


Route::prefix('admin')->group(function () {
    Route::prefix('auth')->group(function () {
        Route::get('login', 'App\Http\Controllers\Admin\AuthController@login')
            ->name('admin.auth.login');
        Route::post('authenticate', 'App\Http\Controllers\Admin\AuthController@authenticate')
            ->name('admin.auth.authenticate');
        Route::get('logout', 'App\Http\Controllers\Admin\AuthController@logout')
            ->name('admin.auth.logout');
    });

    Route::middleware(OnlyAuth::class)->group(function() {
        Route::get('', 'App\Http\Controllers\Admin\IndexController@index')->name('admin.dashboard');
    });
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



