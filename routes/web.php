<?php

use App\Http\Controllers\OAuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth/{provider}', [OAuthController::class, 'redirectProvider'])->name('auth.provider');
Route::get('/auth/callback/{provider}', [OAuthController::class, 'callbackProvider']);
Route::get('/logout', [OAuthController::class, 'logout'])->name('logout');
