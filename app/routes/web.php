<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StartController;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/miniapp', function () {
    return view('miniapp.start');
});

Route::get('/demo/booking', function () {
    return view('miniapp.appointment');
});

Route::any('/telegram/webhook', [StartController::class, 'start'])->withoutMiddleware([VerifyCsrfToken::class]);
