<?php

use Illuminate\Support\Facades\Route;

// Modul web
Route::get('/', function () {
    return view('web.home');
})->name('name');

// Modul admin
Route::get('/cek-status-servis', function () {
    return view('web.track');
})->name('tracking.index');


Route::prefix('client')->group(function () {
    Route::prefix('auth')->group(function () {
        Route::get('login', 'App\Http\Controllers\Client\Auth\AuthController@login')
            ->name('client.login');
        Route::post('login', 'App\Http\Controllers\Client\Auth\AuthController@authenticate')
            ->name('client.authenticate');
        Route::get('logout', 'App\Http\Controllers\Client\Auth\AuthController@logout')
            ->name('client.logout');
    });
});
